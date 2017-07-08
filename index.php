<!--
 * 文件上传
 * $Author: Eno $
 * $Id: upload.php 2017-07-08 01:29:08 Z caoyangyang $
-->
<!DOCTYPE html>
<html>
<head>
<title>Element-ui+Vue.js+php 文件上传 支持拖拽</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style type="text/css">
@import url("//unpkg.com/element-ui@1.3.7/lib/theme-default/index.css");
</style>
<script src="js/vue.js"></script>
<script src="js/index.js"></script>
<div style="top:40%;left:40%;position:absolute;">
  <div style="margin-left:-100px;margin-top:-100px;">
    <div id="app">
      <el-upload 
      class="upload-demo" 
      action="upload.php"
      drag 
      multiple>
      <i class="el-icon-upload"></i>
      <div class="el-upload__text">
        将文件拖到此处，或 <em>点击上传</em>
      </div>
      <!-- 上传提示内容
      <div class="el-upload__tip" slot="tip"></div>
      -->
      </el-upload>
    </div>
  </div>
</div>
 <script>
  new Vue().$mount('#app');
</script>
</body>
</html>