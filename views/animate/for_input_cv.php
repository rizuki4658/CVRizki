<script type="text/javascript">
	$(document).ready(function(){
		$('.text').fadeIn(2000);

		$('.form-cv').fadeIn(3500);

		$('.form-cv').css({'height' : '850px'});
		
		$('#btn_info').click(function(){
			$('#btn_info').css({'backgroundColor' : '#1d1d1d', 'color' : '#ffffff'});
			$('#btn_exp').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
			$('#btn_skill').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
			$('#btn_edu').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
			$('#btn_project').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
			$('#btn_certificate').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
			$('#btn_summary').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});

			$('.personal-info').fadeIn(2500);
			$('.work-experience').fadeOut(1000);
			$('.education').fadeOut(1000);
			$('.skills').fadeOut(1000);
			$('.project').fadeOut(1000);
			$('.certification-licences').fadeOut(1000);
			$('.summary').fadeOut(1000);
			
			return false;
		});
		
		//Work Experience
			$('#btn_exp').click(function(){
				$('#btn_info').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
				$('#btn_exp').css({'backgroundColor' : '#1d1d1d', 'color' : '#ffffff'});
				$('#btn_skill').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
				$('#btn_edu').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
				$('#btn_project').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
				$('#btn_certificate').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
				$('#btn_summary').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});

				$('.personal-info').fadeOut(1000);
				$('.work-experience').fadeIn(2500);
				$('.education').fadeOut(1000);
				$('.skills').fadeOut(1000);
				$('.project').fadeOut(1000);
				$('.certification-licences').fadeOut(1000);
				$('.summary').fadeOut(1000);
				
				return false;
			});
			
			$('#add_work').click(function(){
				$('#add_work').fadeOut(1000);
				$('#info_work_ex').fadeOut(1000);
				$('#form_work_ex').fadeIn(1000);
				return true;
			});
			
			$('#edit_work').click(function(){
				$('#add_work').fadeOut(1000);
				$('#info_work_ex').fadeOut(1000);
				$('#form_work_ex').fadeIn(1500);
			});

			$('#cancel_work_ex').click(function(){
				$('#form_work_ex').fadeOut(1000);
				$('#info_work_ex').fadeIn(1000);
				$('#add_work').fadeIn(1500);
				return true;
			});
		//End Work Experience

		//Education
			$('#btn_edu').click(function(){
				$('#btn_info').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
				$('#btn_exp').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
				$('#btn_skill').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
				$('#btn_edu').css({'backgroundColor' : '#1d1d1d', 'color' : '#ffffff'});
				$('#btn_project').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
				$('#btn_certificate').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
				$('#btn_summary').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});

				$('.personal-info').fadeOut(1000);
				$('.work-experience').fadeOut(1000);
				$('.education').fadeIn(2500);
				$('.skills').fadeOut(1000);
				$('.project').fadeOut(1000);
				$('.certification-licences').fadeOut(1000);
				$('.summary').fadeOut(1000);
				
				return false;
			});

			$('#add_education').click(function(){
				$('#add_education').fadeOut(1000);
				$('#info_education').fadeOut(1000);
				$('#form_education').fadeIn(1000);
			});
			
			$('#edit_education').click(function(){
				$('#add_education').fadeOut(1000);
				$('#info_education').fadeOut(1000);
				$('#form_education').fadeIn(1500);
			});

			$('#cancel_education').click(function(){
				$('#form_education').fadeOut(1000);
				$('#info_education').fadeIn(1000);
				$('#add_education').fadeIn(1500);
				return true;
			});
		//End Education


		//Skill
			$('#btn_skill').click(function(){
				$('#btn_info').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
				$('#btn_exp').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
				$('#btn_edu').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
				$('#btn_skill').css({'backgroundColor' : '#1d1d1d', 'color' : '#ffffff'});
				$('#btn_project').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
				$('#btn_certificate').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
				$('#btn_summary').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});

				$('.personal-info').fadeOut(1000);
				$('.work-experience').fadeOut(1000);
				$('.education').fadeOut(1000);
				$('.skills').fadeIn(2500);
				$('.project').fadeOut(1000);
				$('.certification-licences').fadeOut(1000);
				$('.summary').fadeOut(1000);
				
				return false;
			});

			$('#add_skill').click(function(){
				$('#add_skill').fadeOut(1000);
				$('#info_skill').fadeOut(1000);
				$('#form_skill').fadeIn(1000);
			});

			$('#cancel_skill').click(function(){
				$('#form_skill').fadeOut(1000);
				$('#info_skill').fadeIn(1000);
				$('#add_skill').fadeIn(1500);
				return true;
			});
		//End Skill


		// Project
			$('#btn_project').click(function(){
				$('#btn_info').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
				$('#btn_exp').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
				$('#btn_edu').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
				$('#btn_skill').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
				$('#btn_project').css({'backgroundColor' : '#1d1d1d', 'color' : '#ffffff'});
				$('#btn_certificate').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
				$('#btn_summary').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
				
				$('.personal-info').fadeOut(1000);
				$('.work-experience').fadeOut(1000);
				$('.education').fadeOut(1000);
				$('.skills').fadeOut(1000);
				$('.project').fadeIn(2500);
				$('.certification-licences').fadeOut(1000);
				$('.summary').fadeOut(1000);
				
				return false;
			});

			$('#add_project').click(function(){
				$('#add_project').fadeOut(1000);
				$('#info_project').fadeOut(1000);
				$('#form_project').fadeIn(1000);
			});

			$('#cancel_project').click(function(){
				$('#form_project').fadeOut(1000);
				$('#info_project').fadeIn(1000);
				$('#add_project').fadeIn(1500);
				return true;
			});
		// End Project


		// Certificate
			$('#btn_certificate').click(function(){
				$('#btn_info').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
				$('#btn_exp').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
				$('#btn_skill').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
				$('#btn_edu').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
				$('#btn_project').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
				$('#btn_certificate').css({'backgroundColor' : '#1d1d1d', 'color' : '#ffffff'});
				$('#btn_summary').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
				
				$('.personal-info').fadeOut(1000);
				$('.work-experience').fadeOut(1000);
				$('.education').fadeOut(1000);
				$('.skills').fadeOut(1000);
				$('.project').fadeOut(1000);
				$('.certification-licences').fadeIn(2500);
				$('.summary').fadeOut(1000);
				
				return false;
			});

			$('#add_certificate').click(function(){
				$('#add_certificate').fadeOut(1000);
				$('#info_certificate').fadeOut(1000);
				$('#form_certificate').fadeIn(1000);
			});
			
			$('#edit_certificate').click(function(){
				$('#add_certificate').fadeOut(1000);
				$('#info_certificate').fadeOut(1000);
				$('#form_certificate').fadeIn(1500);
			});

			$('#cancel_certificate').click(function(){
				$('#form_certificate').fadeOut(1000);
				$('#info_certificate').fadeIn(1000);
				$('#add_certificate').fadeIn(1500);
				return true;
			});
		// End Certificate


		// Summary
			$('#btn_summary').click(function(){
				$('#btn_info').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
				$('#btn_exp').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
				$('#btn_skill').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
				$('#btn_edu').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
				$('#btn_project').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
				$('#btn_certificate').css({'backgroundColor' : 'transparent', 'color' : '#1d1d1d'});
				$('#btn_summary').css({'backgroundColor' : '#1d1d1d', 'color' : '#ffffff'});

				$('.personal-info').fadeOut(1000);
				$('.work-experience').fadeOut(1000);
				$('.education').fadeOut(1000);
				$('.skills').fadeOut(1000);
				$('.project').fadeOut(1000);
				$('.certification-licences').fadeOut(1000);
				$('.summary').fadeIn(2500);
				
				return false;
			});

			$('#write_summary').click(function(){
				$('#summary').removeAttr('disabled','');
				$('#summary').attr('required','');
				$('#proses_summary').fadeIn(2500);
			});

			$('#cancel_summary').click(function(){
				$('#proses_summary').fadeOut(500);
				$('#summary').removeAttr('required','');
				$('#summary').attr('disabled','');
				return true;
			});
		// End Summary
		$('.form-cv').css({'height' : '1000px'});
	});
</script>
<script type="text/javascript">
function tampilkanPreview(picture,idpreview)
{
  var gb = picture.files;
  for (var i = 0; i < gb.length; i++)
  {
    var gbPreview = gb[i];
    var imageType = /image.*/;
    var preview=document.getElementById(idpreview);
    var reader = new FileReader();
    if (gbPreview.type.match(imageType))
    {
      //jika tipe data sesuai
      preview.file = gbPreview;
      reader.onload = (function(element)
      {
        return function(e)
        {
          element.src = e.target.result;
        };
      })(preview);
      //membaca data URL gambar
      reader.readAsDataURL(gbPreview);
    }
      else
      {
        //jika tipe data tidak sesuai
        alert("Tipe file tidak sesuai. Gambar harus bertipe .jpg atau .jpeg.");
        return false;
      }
  }
}
</script>