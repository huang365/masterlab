<!DOCTYPE html>
<html class="" lang="en">
<head>
    <? require_once VIEW_PATH.'gitlab/common/header/include.php';?>
    <script src="<?=ROOT_URL?>dev/lib/handlebars-v4.0.10.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?=ROOT_URL?>dev/js/handlebars.helper.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?=ROOT_URL?>dev/js/project/autosearch.js" type="text/javascript" charset="utf-8"></script>

    <link rel="stylesheet" href="<?=ROOT_URL?>dev/lib/editor.md/css/editormd.css">
    <link rel="stylesheet" href="<?=ROOT_URL?>dev/lib/editor.md/css/editormd.preview.css">
    <script src="<?=ROOT_URL?>dev/lib/editor.md/lib/marked.min.js"></script>
    <script src="<?=ROOT_URL?>dev/lib/editor.md/lib/prettify.min.js"></script>
    <script src="<?=ROOT_URL?>dev/lib/editor.md/editormd.js"></script>



</head>
<body class="" data-group="" data-page="projects:issues:index" data-project="xphp">
<? require_once VIEW_PATH.'gitlab/common/body/script.php';?>
<header class="navbar navbar-gitlab with-horizontal-nav">
    <a class="sr-only gl-accessibility" href="#content-body" tabindex="1">Skip to content</a>
    <div class="container-fluid">
        <? require_once VIEW_PATH.'gitlab/common/body/header-content.php';?>
    </div>
</header>
<script>
    var findFileURL = "";
</script>
<div class="page-with-sidebar">
    <? require_once VIEW_PATH.'gitlab/project/common-page-nav-project.php';?>
    <? require_once VIEW_PATH.'gitlab/project/common-home-nav-links-sub-nav.php';?>

    <div class="content-wrapper page-with-layout-nav page-with-sub-nav">
        <div class="alert-wrapper">


            <div class="flash-container flash-container-page">
            </div>
        </div>

        <div class="container-fluid ">
            <div class="content" id="content-body">


                <div class="project-home-panel text-center">
                    <div class="container-fluid limit-container-width">
                        <div class="avatar-container s70 project-avatar">
                            <div class="avatar s70 avatar-tile identicon" style="background-color: #<?=$bg_color?>; color: #555"><?=$data['first_word']?></div>
                        </div>
                        <h1 class="project-title">
                            <?=$project_name?>
                        </h1>
                        <div class="project-home-desc">
                            <p dir="auto"> <?=$project['description'] ?> </p>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">

                </div>
                <div class="container-fluid">
                    <div class="row prepend-top-default">
                        <div class="col-lg-3 profile-settings-sidebar">
                            <h4 class="prepend-top-0">
                                基本信息
                                <a name="h4_basic_info" id="h4_basic_info" ></a>
                            </h4>
                        </div>
                        <div class="col-lg-9">
                            <article class="file-holder readme-holder">
                                <div id="content" class="mdl-cell mdl-card mdl-cell--12-col mdl-shadow--2dp content editormd-preview-theme-dark">
                                    <textarea style="display:none;" name="editormd-markdown-doc"><?=$project['detail'] ?></textarea>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="project-show-files">
                        <div class="tree-holder clearfix" id="tree-holder">

                        </div>

                    </div>
                </div>

            </div>

            <div class="project-edit-container">

            </div>
        </div>
    </div>
</div>



<script>
    $(function(){
        editormd.markdownToHTML("content");
    });
</script>

</body>
</html>
