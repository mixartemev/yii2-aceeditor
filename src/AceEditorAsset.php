<?php

namespace mixartemev\aceeditor;

use yii\web\AssetBundle;

/**
 * Class AceEditorAsset
 * @package mixartemev\aceeditor
 * @author Eugene Terentev <eugene@terentev.net>
 */
class AceEditorAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/ace-builds/src-min-noconflict';

    /**
     * @inheritdoc
     */
    public $js = [
        'ace.js'
    ];

} 