<?php
/**
 * EasyUi class file.
 *
 * @author Oscar Borja <adsofmelk@gmail.com>
 * @link http://www.siglodelhombre.com
 * @copyright Copyright &copy;
 * version 1
 */

class EasyUi extends CWidget
{
    public $width;
    public $height;
    public $headers;
    public $title;
    public $id;
    public $pk;
    public $action;
    public $dialoginfo;
    public $saveurl;
    public $menubutton;

	public function run(){
                
        // Register scripts
        $this->registerClientScript();
                
       //////////
       $assetsDir=Yii::app()->baseUrl.DIRECTORY_SEPARATOR;
          
       
       ///VENTANA DE DIALOG
             
        echo '<div id="dlg" class="easyui-dialog" title="Información del titulo" data-options="closed:true,resizable:false,modal:true" style="width:800px;height:400px;padding:10px;top:200px; ">
		
	</div>';
       ////FIN VENTANA DE DIALOG
			
        echo '<table id="'.$this->id.'" class="easyui-datagrid" title="'.$this->title.'" style="width:'.$this->width.'px;height:'.$this->height.'px"
			data-options="iconCls: \'icon-edit\',onClickRow: onClickRow,toolbar: \'#tb\',singleSelect:true,collapsible:true,url:\''.$this->action.'\'">
		<thead>
			<tr>';
        
        foreach($this->headers as $header){
            
            
            if(isset($header['editor'])){
                $header['type'] = (isset($header['type']))?$header['type']:'text';
                
                switch($header['type']){
                   case 'combobox':{
                       $header['editor']= ", editor:{
                                                type:'combobox',
                                                options:{
                                                        valueField:'".$header['values']['valueField']."',
                                                        textField:'".$header['values']['textField']."',
                                                        url:'".$header['values']['url']."'
                                                }
                                            }";
                       break;
                   }
                    
                   default:{
                        $header['editor']=',editor:\''.$header['type'].'\'';
                        break;   
                    }
                    
                }
                
            }else{
                $header['editor']='';
            }
            
            
            if(isset($header['sortable'])){
               $header['sortable']=',sortable:'.$header['sortable'];
            }else{
                $header['sortable']=',sortable:false';
            }
            
            if(isset($header['hidden'])){
               $header['hidden']=',hidden:'.$header['hidden'];
            }else{
                $header['hidden']=',hidden:false';
            }
            
            if(isset($header['formater'])){
                $header['formater']=',formatter:function(value,row){return row.'.$this->pk.';}';
            }else{
                $header['formater']='';
            }
            
            
            echo '<th data-options="field:\''.$header['name'].'\',width:'.$header['width'].''.$header['sortable'].''.$header['editor'].''.$header['hidden'].''.$header['formater'].'">'.$header['label'].'</th>';
        }
	
	echo 	'</tr>
		</thead>
                
	</table>';  
        if(is_array($this->menubutton)){
            echo '<div id="tb" style="height:auto">';
            foreach($this->menubutton as $row){
                echo '<a href="javascript:void(0)" class="easyui-linkbutton" data-options="plain:true" onclick="'.$row['onclick'].'()">'.$row['label'].'</a>';
            }
            echo '</div>';
        }
        
        
                /////////////////

	$this->customClientScript();
        
	}
         
        
        /*
	 * registerClientScript
	 * 
	 * This function is used tu register the CSS and JS
	 * scripts used in this Widget.
	 */
	protected function registerClientScript(){
            $assetsDir=dirname(__FILE__).DIRECTORY_SEPARATOR.'assets';
            $assetsDir=Yii::app()->getAssetManager()->publish($assetsDir);
            
            $cs = Yii::app()->clientScript;

	    $cs->registerCssFile($assetsDir.'/themes/default/easyui.css');
            $cs->registerCssFile($assetsDir.'/themes/default/icon.css');  
           
          
            $cs->registerScriptFile($assetsDir.'/jquery-1.8.0.min.js',CClientScript::POS_HEAD);
            $cs->registerScriptFile($assetsDir.'/jquery.easyui.min.js',CClientScript::POS_HEAD);
            

	}
        
        protected function customClientScript(){
         echo "<script type=\"text/javascript\">
                    var editIndex = undefined;
                    function endEditing(){
                            if (editIndex == undefined){return true}
                            if ($('#".$this->id."').datagrid('validateRow', editIndex)){
                                    
                                   ";
                 
        foreach($this->headers as $header){ 
         if(isset($header['editor'])){
             echo "
                    var ed = $('#".$this->id."').datagrid('getEditor', {index:editIndex,field:'".$header['name']."'});
                    if(ed!=null){
                        var ".$header['name']." = $(ed.target).". ((isset($header['type']))?$header['type']:'text')."('getText');
                        $('#".$this->id."').datagrid('getRows')[editIndex]['".$header['name']."'] = ".$header['name'].";
                        $('#".$this->id."').datagrid('endEdit', editIndex);
                    }
                  ";
         }   
         

        }                        
                                    
        echo "
                                    editIndex = undefined;
                                    return true;
                            } else {
                                    return false;
                            }
                    }
                    function onClickRow(index){
                            if (editIndex != index){
                                    if (endEditing()){
                                            $('#".$this->id."').datagrid('selectRow', index).datagrid('beginEdit', index);
                                            editIndex = index;
                                    } else {
                                            $('#".$this->id."').datagrid('selectRow', editIndex);
                                    }
                            }else{
                                window.open('".$this->dialoginfo."');
                                $('#dlg').load('".$this->dialoginfo."' + 'id/' +  $('#".$this->id."').datagrid('getRows')[index]['iditem']);
                                $('#dlg').dialog('open');
                            }
                            
                    }
                    function append(){
                            if (endEditing()){
                                    $('#".$this->id."').datagrid('appendRow',{status:'P'});
                                    editIndex = $('#".$this->id."').datagrid('getRows').length-1;
                                    $('#".$this->id."').datagrid('selectRow', editIndex)
                                                    .datagrid('beginEdit', editIndex);
                            }
                    }
                    function remove(){
                            if (editIndex == undefined){return}
                            $('#".$this->id."').datagrid('cancelEdit', editIndex)
                                            .datagrid('deleteRow', editIndex);
                            editIndex = undefined;
                    }
                    function accept(){
                            if (endEditing()){
                                    $('#".$this->id."').datagrid('acceptChanges');
                            }
                    }
                    function reject(){
                            $('#".$this->id."').datagrid('rejectChanges');
                            editIndex = undefined;
                    }
                    function getChanges(){
                            var rows = $('#".$this->id."').datagrid('getChanges');
                            alert(rows.length+' registros fueron cambiados!');
                    }
                    function saveChanges(){
                           
                            var rows = $('#".$this->id."').datagrid('getRows');
                            
                            
                            $.each(rows, function(i, row) {
                              $('#".$this->id."').datagrid('endEdit', i);
                              var url = '".$this->saveurl."';
                              $.ajax(url, {
                                  type:'POST',
                                  dataType: 'json',
                                  data:row
                              });
                            });
                            
                            alert('Los registros fueron almacenados');

                    }
            </script>";   
            
        }
	
        
}

?>
