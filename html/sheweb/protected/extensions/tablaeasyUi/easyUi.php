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
    public $data;
    public $cols;
    public $title;

	public function run(){
                
        // Register scripts
        $this->registerClientScript();
                
       //////////
       $assetsDir=Yii::app()->baseUrl.DIRECTORY_SEPARATOR;
               
                
        echo '<table class="easyui-datagrid" title="'.$this->title.'" style="width:'.$this->width.'px;height:'.$this->height.'px"
			data-options="singleSelect:true,collapsible:true">
		<thead>
			<tr>';
        
        foreach($this->headers as $header){
            echo '<th data-options="field:\''.$header['name'].'\',width:'.$header['width'].'">'.$header['label'].'</th>';
        }
	
	echo 	'</tr>
		</thead>
                
	</table>';  
                /////////////////

	
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
	
        
}

?>
