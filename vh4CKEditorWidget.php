<?php
/*
 * Created on 01.03.2015
 *
 * Copyright: Łukasz Zabielski
 *
 */

class vh4CKEditorWidget extends CInputWidget
{
        /**
         * This is a object widget form to BootStrap 
         * @var type Object
         */
        public $form;
        
        /**
         * This is a config array to CKEditor.
         * @var type array
         */
	public $config;

        protected function registerClientScript()
        { 
                $baseDir = dirname(__FILE__);
                $assets = Yii::app()->getAssetManager()->publish($baseDir.DIRECTORY_SEPARATOR.'assets');
                $cs = Yii::app()->getClientScript();
                $cs->registerScriptFile($assets.'/ckeditor.js');
        }

	public function run()
	{
                $this->registerClientScript();
                if($this->hasModel()) {
                        $html = $this->form->textAreaControlGroup($this->model, $this->attribute, array('span' => 6, 'rows' => 8, 'id'=>'editor1'));
                }

                echo $html;
                
                ?>
                <script type="text/javascript">
                        CKEDITOR.replace( 'editor1' );
                </script>
                <?php 
	}
}
?>
