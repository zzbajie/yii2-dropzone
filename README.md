yii2-dropzone
=================
yii2-dropzone

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist zzbajie/yii2-dropzone "dev-master"
```

or add

```
"zzbajie/yii2-dropzone": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \zzbajie\dropzone\DropZone::widget(
    [
        'name' => 'img', // input name or 'model' and 'attribute'
        'url' => 'upload-main', // upload url
        'storedFiles' => [
        ], // stores files
        'eventHandlers' => [], // dropzone event handlers
        'sortable' => false, // sortable flag
        'sortableOptions' => [], // sortable options
        'htmlOptions' => [
        ], // container html options
        'options' => [
            'params' => ['productId' => $model->id,],
            //'addRemoveLinks' => true,
            //'dictRemoveFile' => "删除",
            'dictCancelUpload' => "取消",
            'dictDefaultMessage' => '<button class="btn btn-default btn-flat" type="button" id="submit-img-btn">点击或拖拽图片到这里 (<span style="color:#7e0099;"> 宽600px * 高600px </span>)</button>',
            'acceptedFiles' => "image/*",
            'uploadMultiple' => false,
        ], // dropzone js options
        'eventHandlers' => [
            'complete' => "function(file){console.log(file)}",
            'removedfile' => "function(file){alert(file.name + ' is removed')}",
            //'sending' => "function(file, xhr, formData){formData.append('" . Yii::$app->request->csrfParam . "','" . Yii::$app->request->getCsrfToken() . "')}"
        ]
    ]
);
?>```