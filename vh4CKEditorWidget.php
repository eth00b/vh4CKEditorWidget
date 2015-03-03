<?php
/*
 * Created on 01.03.2015
 *
 * Copyright: Łukasz Zabielski
 *
 * GNU LESSER GENERAL PUBLIC LICENSE
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU lesser General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * Requirements:
 * The CK-Editor have to be installed and configured. The Editor itself is
 * not included to this extension.
 *
 * This extension have to be installed into:
 * <Yii-Application>/protected/extensions/TheCKEditor
 *
 * Usage:
<?php $this->widget('application.extensions.vh4CKEditorWidget.vh4CKEditorWidget',array(
                    'model'=>$model,                # Data-Model
                    'form'=>$form,                  # Object this form (Bootstrap)
                    'attribute'=>'content',         # Attribute in the Data-Model
) ); ?>
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
