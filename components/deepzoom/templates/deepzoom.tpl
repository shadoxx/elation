{component name="html.header"}
{dependency type="component" name="deepzoom"}
<div class="container">
  {component name="deepzoom.imagelist"}
  {component name="html.multizoom" img=$imgname imgdata=$imgdata}
</div>
<script type="text/javascript">
setTimeout(function() {ldelim} window.scrollTo(0, 1); {rdelim}, 1000);
</script>
{component name="html.footer"}
