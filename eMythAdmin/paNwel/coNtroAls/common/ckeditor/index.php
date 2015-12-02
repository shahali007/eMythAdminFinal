<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>A Simple Page with CKEditor</title>
<script type="text/javascript" src="common/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>
<form>
<textarea name="editor1" id="editor1" rows="10" cols="80">This is my textarea to be replaced with <b>CKEditor</b>.</textarea>
</form>
<script type="text/javascript">
CKEDITOR.replace('editor1',
{
	"extraPlugins": "imgbrowse",
	"filebrowserImageUploadUrl": "ckeditor/plugins/imgupload/imgupload.php",
	"filebrowserImageBrowseUrl": "ckeditor/plugins/imgbrowse/imgbrowse.html"
}
);
</script>
</body>
</html>