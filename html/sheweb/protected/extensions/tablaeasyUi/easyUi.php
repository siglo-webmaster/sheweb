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

	public function run(){
                
		// Register scripts
		$this->registerClientScript();
                
                 ///////////
       $assetsDir=Yii::app()->baseUrl.DIRECTORY_SEPARATOR;
               
                
        echo '
	<table class="easyui-datagrid" title="TEST" style="width:700px;height:250px"
			data-options="singleSelect:true,collapsible:true">
		<thead>
			<tr>
				<th data-options="field:\'itemid\',width:80">Item ID</th>
				<th data-options="field:\'productid\',width:100">Product</th>
				<th data-options="field:\'listprice\',width:80,align:\'right\'">List Price</th>
				<th data-options="field:\'unitcost\',width:80,align:\'right\'">Unit Cost</th>
				<th data-options="field:\'attr1\',width:250">Attribute</th>
				<th data-options="field:\'status\',width:60,align:\'center\'">Status</th>
			</tr>
		</thead>
	</table>
              ';  
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
            $cs->registerCssFile($assetsDir.'/themes/demo.css'); 
          
            $cs->registerScriptFile($assetsDir.'/jquery-1.8.0.min.js',CClientScript::POS_HEAD);
            $cs->registerScriptFile($assetsDir.'/jquery.easyui.min.js',CClientScript::POS_HEAD);
            

	}
	
        
}

?>
