<?php echo $this->load->view('include/header_page')?>
<body>
   <div id="container">
      <h1>Uploadify and Codeigniter Tutorial</h1>

      <div id="body">
         <p>
            <input type="file" name="file_upload" id="file_upload">
         </p>
         <p>
            <div>Messages</div>
            <div id="messages">
               
            </div>
         </p>
      </div>

      <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
   </div>

   <script type="text/javascript">
      $(document).ready(function() {
        $('#file_upload').uploadify({
            'uploader':   'http://localhost/store/asset/uploadify/uploadify.swf',
            'script':     'http://localhost/store/asset/uploadify/uploadify.php',
            'cancelImg':  'http://localhost/store/asset/uploadify/cancel.png',
            'folder':    '/store/uploads',
            'multi': true,
			'auto' : true,
			'onComplete'  : function(event, ID, fileObj, response, data) 
			{
				$.ajax({
				url : base_url + 'http://localhost/store/upload/filemanipulation/' + fileObj.type +'/' + fileObj.name,
				success : function(response){
               
               if(response == 'image')
                 {
                    
                   var images = $('<li><a target="_blank" href="'+base_url+'uploads/'+fileObj.name+'"><img src="'+base_url + 'uploads/thumbs/' +fileObj.name+'" alt=""></a></li><a target="_blank" href="'+base_url+'uploads/'+fileObj.name+'">');
                   $(images).hide().insertBefore('#displayFiles').slideDown('slow')
                 }
                  else
                 {
                   var files = $('</a><a href="'+base_url + 'uploads/thumbs/' +fileObj.name+'" target="_blank">'+fileObj.name+'</a>');
                   $(files).hide().insertBefore('#displayFiles').slideDown('slow')
                 }
            }
        })
			}
        });
      });
   </script>
</body>
</html>
