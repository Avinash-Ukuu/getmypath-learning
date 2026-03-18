let box_faded = document.querySelector('.box-faded');
let lead_form_wrapper = document.querySelector('#lead-form-wrapper');
let lets_connect_btn = document.querySelectorAll('.lets-connect-btn');
let remove_lead_form = document.querySelector('#remove-lead-form');

if (typeof(lets_connect_btn) !== 'undefined' && lets_connect_btn !== null) {
	lets_connect_btn.forEach(element => {
		element.onclick = function(){
			leadFormPopUp();
		}
	});
}
if (typeof(remove_lead_form) !== 'undefined' && remove_lead_form !== null) {
	remove_lead_form.onclick = function(){
		box_faded.style.display = 'none';
		lead_form_wrapper.style.transform = 'rotateX(90deg)';
		lead_form_wrapper.style.top = '-200px';
	}
}
function leadFormPopUp(){
    if (typeof(lead_form_wrapper) !== 'undefined' && lead_form_wrapper !== null) {
	    box_faded.style.display = 'block';
	    lead_form_wrapper.style.transform = 'rotateX(0deg)';
	    lead_form_wrapper.style.top = '10px';
    }
}

let lead_form = document.querySelectorAll('.lead-form');
if (typeof(lead_form) !== 'undefined' && lead_form !== null) {
	lead_form.forEach(element => {
		element.onsubmit = function(e){
			let processV = 'Please wait for a moment';
			e.preventDefault();
			e.target.querySelector('.response-wrapper').innerHTML = `<div class='process'>`+`${processV}`+`</div>`;
			let formData = new FormData(e.target);
			fetch('api/store-enquiry',{
				method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
				body: formData
			}).then(response => response.json())
			.then(data => {
            console.log(data);
            if (data.status === true) {
                element.reset();
                e.target.querySelector('.response-wrapper').innerHTML =
                    `<div class="success">${data.message}</div>`;
                setTimeout(() => {
                    window.location.reload();
                }, 1500);
            } else {
                e.target.querySelector('.response-wrapper').innerHTML =
                    `<div class="error">${data.message || 'Something went wrong'}</div>`;
            }
        })
		}
	});
}

