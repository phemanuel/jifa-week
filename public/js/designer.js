$(document).ready(function(){
    let currentStep = 1;
    const totalSteps = $('.form-step').length;

    function showStep(step){
        $('.form-step').addClass('d-none');
        $('.form-step[data-step="'+step+'"]').removeClass('d-none');
        let percent = (step/totalSteps)*100;
        $('#progressBar').css('width', percent+'%');
        $('.form-step[data-step="'+step+'"] .step-error').remove();
        $('#progressBar').removeClass('bg-danger');
    }

    function validateStep(step){
        let valid = true;
        $('.form-step[data-step="'+step+'"] .step-error').remove();

        $('.form-step[data-step="'+step+'"] input, .form-step[data-step="'+step+'"] select, .form-step[data-step="'+step+'"] textarea').each(function(){
            if(!this.checkValidity()){
                valid = false;
                $(this).addClass('is-invalid');
            } else {
                $(this).removeClass('is-invalid');
            }
        });

        if(!valid){
            $('#progressBar').addClass('bg-danger');
            setTimeout(()=> { $('#progressBar').removeClass('bg-danger'); }, 1500);
            const errorHtml = `<div class="alert alert-danger step-error mt-2">Please fill all required fields before continuing.</div>`;
            $('.form-step[data-step="'+step+'"] .card-body:first').prepend(errorHtml);
            $('html, body').animate({scrollTop: $('.form-step[data-step="'+step+'"]').offset().top - 120}, 400);
        }

        return valid;
    }

    $('.next-step').click(function(){
        if(validateStep(currentStep)){
            if(currentStep < totalSteps){
                currentStep++;
                showStep(currentStep);
            }
        }
    });

    $('.prev-step').click(function(){
        if(currentStep > 1){
            currentStep--;
            showStep(currentStep);
        }
    });
});