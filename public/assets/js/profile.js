



function delProject(ele){
  if(confirm("選択したプロジェクトを削除しますか？")){

    location.href = base_url+"/company/projects/delete/"+ele;
    
  }
}






jQuery(function ($) {

  var date = new Date();
  var day = date.getDate();
  var month = date.getMonth() + 1;
  var year = date.getFullYear();

  if (month < 10) month = "0" + month;
  if (day < 10) day = "0" + day;

  var today = year + "-" + month + "-" + day;
  $("[name='birthday']").val(today);
  $("[name='birthday']").on("change", function() {
      this.setAttribute(
          "data-date",
          moment(this.value, "YYYY年MM⽉DD⽇")
          .format( this.getAttribute("data-date-format") )
      )
  }).trigger("change")
    




    function validateInput() {
     var success = true;

      var element = $("[name='birthday']");
      
      if (element.val() == today) {
        element.next(".reg-error").css("display","block");
        success = false;
      } else {	      
        element.next(".reg-error").css("display","none");
      }   

      var element = $("[name='gender']");
      
      if (element.val() == '') {
        element.next(".reg-error").css("display","block");
        success = false;
      } else {	      
        element.next(".reg-error").css("display","none");
      } 

      var element = $("[name='country']");
      
      if (element.val() == '') {
        element.next(".reg-error").css("display","block");
        success = false;
      } else {	      
        element.next(".reg-error").css("display","none");
      } 


      var element = $("[name='exp-year']");
      
      if (element.val() == '') {
        element.next(".reg-error").css("display","block");
        success = false;
      } else {	      
        element.next(".reg-error").css("display","none");
      } 


      var element = $("[name='status']");
      
      if (element.val() == '') {
        element.next(".reg-error").css("display","block");
        success = false;
      } else {	      
        element.next(".reg-error").css("display","none");
      } 

      var element = $("[name='category']");
      
      if (element.val() == '0') {
        element.next(".reg-error").css("display","block");
        success = false;
      } else {	      
        element.next(".reg-error").css("display","none");
      } 


       var element = $("[name='phone']");
       var Phone = /^\d{2}-\d{4}-\d{4}$/i;

       if (element.val() == null || element.val().trim() == "" || !Phone.test(element.val())) {
         element.next(".reg-error").css("display","block");
         success = false;
       } else {	      
         element.next(".reg-error").css("display","none");
       }
         return success;
     }



    $("#sendSkills").click(function() {
      if (validateInput()) {
            $('#userSkillForm').submit();
      }
    });




    function validateInfo() {
      var success = true;
 
        var element = $("[name='phone']");
        var Phone = /^\d{2}-\d{4}-\d{4}$/i;
 
        if (element.val() == null || element.val().trim() == "" || !Phone.test(element.val())) {
          element.next(".reg-error").css("display","block");
          success = false;
        } else {	      
          element.next(".reg-error").css("display","none");
        }

        var element = $("[name='url']");
	  
        if (element.val() == null || element.val().trim() == "") {
          element.next(".reg-error").css("display","block");
          success = false;
        } else {	      
          element.next(".reg-error").css("display","none");
        }   


        var element = $("[name='found_at']");
        var Date = /^\d{4}\-(0?[1-9]|1[012])\-(0?[1-9]|[12][0-9]|3[01])$/i;
        if (element.val() == null || element.val().trim() == "" || !Date.test(element.val())) {
          element.next(".reg-error").css("display","block");
          success = false;
        } else {	      
          element.next(".reg-error").css("display","none");
        } 

        var element = $("[name='capital']");
	  
        if (element.val() == null || element.val().trim() == "") {
          element.next(".reg-error").css("display","block");
          success = false;
        } else {	      
          element.next(".reg-error").css("display","none");
        } 

        var element = $("[name='ceo']");
	  
        if (element.val() == null || element.val().trim() == "") {
          element.next(".reg-error").css("display","block");
          success = false;
        } else {	      
          element.next(".reg-error").css("display","none");
        } 

        var element = $("[name='employee']");
        var Number = /^[0-9]{1,10}$/i;
        if (element.val() == null || element.val().trim() == "" || !Number.test(element.val())) {
          element.next(".reg-error").css("display","block");
          success = false;
        } else {	      
          element.next(".reg-error").css("display","none");
        } 

        var element = $("[name='address']");
	  
        if (element.val() == null || element.val().trim() == "") {
          element.next(".reg-error").css("display","block");
          success = false;
        } else {	      
          element.next(".reg-error").css("display","none");
        } 

        // var element = $("[name='detail']");
	  
        // if (element.val() == null || element.val().trim() == "") {
        //   element.next(".reg-error").css("display","block");
        //   success = false;
        // } else {	      
        //   element.next(".reg-error").css("display","none");
        // } 

        return success;
      }



    $("#sendCompanyInfo").click(function() {      
      
      if (validateInfo()) {
           $('#companyInfoForm').submit();
      }
    });



    function validatePost() {
      var success = true;
 
        var element = $("[name='title']");
	  
        if (element.val() == null || element.val().trim() == "") {
          element.next(".reg-error").css("display","block");
          success = false;
        } else {	      
          element.next(".reg-error").css("display","none");
        }   

        var element = $("[name='details']");
	  
        if (element.val() == null || element.val().trim() == "") {
          element.next(".reg-error").css("display","block");
          success = false;
        } else {	      
          element.next(".reg-error").css("display","none");
        } 

        var element = $("[name='estimate']");
	  
        if (element.val() == null || element.val().trim() == "") {
          element.next(".reg-error").css("display","block");
          success = false;
        } else {	      
          element.next(".reg-error").css("display","none");
        } 

        var element = $("[name='mates']");
        var Number = /^[0-9]{1,10}$/i;
        if (element.val() == null || element.val().trim() == "" || !Number.test(element.val())) {
          element.next(".reg-error").css("display","block");
          success = false;
        } else {	      
          element.next(".reg-error").css("display","none");
        } 


        var element = $("[name='during']");
	  
        if (element.val() == null || element.val().trim() == "") {
          element.next(".reg-error").css("display","block");
          success = false;
        } else {	      
          element.next(".reg-error").css("display","none");
        } 


        // var element = $("[name='during']");
        // var Date = /^\d{4}\-(0?[1-9]|1[012])\-(0?[1-9]|[12][0-9]|3[01])$/i;
        // if (element.val() == null || element.val().trim() == "" || !Date.test(element.val())) {
        //   element.next(".reg-error").css("display","block");
        //   success = false;
        // } else {	      
        //   element.next(".reg-error").css("display","none");
        // } 
        

        var element = $("[name='address']");
	  
        if (element.val() == null || element.val().trim() == "") {
          element.next(".reg-error").css("display","block");
          success = false;
        } else {	      
          element.next(".reg-error").css("display","none");
        } 

        var element = $("[name='schedule']");
	  
        if (element.val() == null || element.val().trim() == "") {
          element.next(".reg-error").css("display","block");
          success = false;
        } else {	      
          element.next(".reg-error").css("display","none");
        }        

        return success;
        
      }



    $("#sendCompanyPost").click(function() {

      if($("[name='skills']").val()=='') {alert("言語・ツールを入れてください"); return;}
      if($("[name='positions']").val()=='') {alert("職種を入れてください"); return;}
      if($("[name='areas']").val()=='') {alert("エリアなどを入れてください"); return;}

      if (validatePost()) {
           $('#companyPostForm').submit();
      }
    });



    function validateMail() {
     var success = true;

       var element = $("[name='mailText']");

       if (element.val() == null || element.val().trim() == "") {
         element.next(".reg-error").css("display","block");
         success = false;
       } else {	      
         element.next(".reg-error").css("display","none");
       }
         return success;
     }



    $("#memberlettersend").click(function() {
      if (validateMail()) {
            $('#postMailForm').submit();
      }
    });












































    function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function(e) {
              $('#imagePreview').css('background-image', 'url('+e.target.result +')');
              $('#imagePreview').hide();
              $('#imagePreview').fadeIn(650);
          }
          reader.readAsDataURL(input.files[0]);
      }
  }
  $("#imageUpload").change(function() {
      readURL(this);
  });




  $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });








});







$(document).on("change", ".uploadProfileInput", function () {
  
  

  var triggerInput = this;
  var currentImg = $(this).closest(".pic-holder").find(".pic").attr("src");
  var holder = $(this).closest(".pic-holder");
  var wrapper = $(this).closest(".profile-pic-wrapper");
  $(wrapper).find('[role="alert"]').remove();
  var files = !!this.files ? this.files : [];
  if (!files.length || !window.FileReader) {
    return;
  }
  if (/^image/.test(files[0].type)) {
    // only image file
    var reader = new FileReader(); // instance of the FileReader
    reader.readAsDataURL(files[0]); // read the local file

    reader.onloadend = function () {
      $(holder).addClass("uploadInProgress");
      $(holder).find(".pic").attr("src", this.result);
      $(holder).append(
        '<div class="upload-loader"><div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div></div>'
      );

      // Dummy timeout; call API or AJAX below
      setTimeout(() => {
        $(holder).removeClass("uploadInProgress");
        $(holder).find(".upload-loader").remove();
        // If upload successful
        if (Math.random() < 0.9) {









          var file_data = $('#newProfilePhoto').prop('files')[0];
          var form_data = new FormData();
          form_data.append('file', file_data);

          $.ajax({
            url: route_profile_image_upload, // point to server-side PHP script 
            dataType: 'json', // what to expect back from the PHP script
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
              if(response['success'] == true){

                var path = response['file'].replace('public',path_storage);
                $(".menu-profile").find('img').attr('src', path);
                $(".figure").find('img').attr('src', path);

                $(wrapper).append(
                  '<div class="snackbar show" role="alert"><i class="fa fa-check-circle text-success"></i> プロフィール画像が正常に更新されました。</div>'
                ); // display success response from the PHP script
              }


              else
                $(wrapper).append(
                  '<div class="snackbar show" role="alert"><i class="fa fa-times-circle text-danger"></i> アップロード中にエラーが発生しました。 後でもう一度やり直してください。</div>'
                );

            },
            error: function (response) {
              
            }
          });













          // $(wrapper).append(
          //   '<div class="snackbar show" role="alert"><i class="fa fa-check-circle text-success"></i> プロフィール画像が正常に更新されました。</div>'
          // );

          // Clear input after upload
          $(triggerInput).val("");

          setTimeout(() => {
            $(wrapper).find('[role="alert"]').remove();
          }, 3000);
        } else {
          $(holder).find(".pic").attr("src", currentImg);
          $(wrapper).append(
            '<div class="snackbar show" role="alert"><i class="fa fa-times-circle text-danger"></i> アップロード中にエラーが発生しました。 後でもう一度やり直してください。</div>'
          );

          // Clear input after upload
          $(triggerInput).val("");
          setTimeout(() => {
            $(wrapper).find('[role="alert"]').remove();
          }, 3000);
        }
      }, 1500);
    };
  } else {
    $(wrapper).append(
      '<div class="alert alert-danger d-inline-block p-2 small" role="alert">有効な画像を選択してください。</div>'
    );
    setTimeout(() => {
      $(wrapper).find('role="alert"').remove();
    }, 3000);
  }
});







