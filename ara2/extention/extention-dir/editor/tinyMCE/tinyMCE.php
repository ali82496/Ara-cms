<script src="extention/extention-dir/editor/tinyMCE/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        selector: '.mytextarea'
    });
</script>


<label for="" class="margin">Title : </label>
<input type="text" name="new-post-title" id="" class="margin" style="width: 100%;">
<label for="" class="margin">Author : </label>
<input type="text" name="new-post-author" id="" class="margin" style="width: 100%;">
<label for="" class="margin">Content : </label>
<textarea class="mytextarea" name="new-post-content">Hello, World!</textarea>
<input type="submit" value="submit" name="submitme">