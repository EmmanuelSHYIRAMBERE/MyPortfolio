var typed = new Typed(".text", {
    strings: ["Frontend Developer", "Freelancer", "Web Developer"],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    loop: true
});


const btn = document.getElementById('button');

document.getElementById('form')
 .addEventListener('submit', function(event) {
   event.preventDefault();

   btn.value = 'Sending...';

   const serviceID = 'service_feidnor';
   const templateID = 'template_mcl8zir';

   emailjs.sendForm(serviceID, templateID, this)
    .then(() => {
      btn.value = 'Send Email';
      alert('Sent! Thank you for feedback.');
      this.reset();
    }, (err) => {
      btn.value = 'Send Email';
      alert(JSON.stringify(err));
    });
});
