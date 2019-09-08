<script src="extention/extention-dir/editor/tinyMCE/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        selector: '#mytextarea'
    });
</script>

<form action="d-tabs/new.php" method="POST">
    <label for="" class="margin">Title : </label>
    <input type="text" name="new-post-title" id="" class="margin" style="width: 100%;">
    <label for="" class="margin">Author : </label>
    <input type="text" name="new-post-author" id="" class="margin" style="width: 100%;">
    <label for="" class="margin">Content : </label>
    <textarea id="mytextarea" name="new-post-content">Hello, World!</textarea>
    <input type="submit" value="submit" name="submitme">
</form>