var swiper = new Swiper(".slide-index_1", {
  pagination: {
    el: ".slide-index_1 .swiper-pagination",
  },
});


document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
      e.preventDefault();

      document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
      });
  });
});


$('#submit_form').click(function(e){

  var isValid = true;

  var curInputs = $('#contato form').find(
    "input[type='text'][required],input[type='checkbox'][required],input[type='radio'][required],input[type='date'][required],input[type='url'][required], input[type='email'][required], select[required], textarea[required]"
  );

  for (var p = 0; p < curInputs.length; p++) {

    if (!curInputs[p].validity.valid) {
      isValid = false;
      $(curInputs[p]).addClass('is-invalid');
    }else{
      $(curInputs[p]).removeClass('is-invalid');
    }
  }

  if(isValid){
    setTimeout(() => { $('#contato form').submit(); }, 300);
  }else{
    e.preventDefault();
  }
  
});

const notyf = new Notyf({
    duration: 0,
    position: {
        x: 'right',
        y: 'top',
    },
    dismissible: true
});
