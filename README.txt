How to install widget?


First step:
You install (Bootstrap librarry to Yii framework) https://github.com/Crisu83/yiistrap/archive/master.zip


Next:

This extension have to be installed into:
<Yii-Application>/protected/extensions/vh4CKEditorWidget


Usage:
<?php $this->widget('application.extensions.vh4CKEditorWidget.vh4CKEditorWidget',array(
        'model'=>$model,                # Data-Model
        'form'=>$form,                  # Object this form (Bootstrap)
        'attribute'=>'content',         # Attribute in the Data-Model
) ); ?>
