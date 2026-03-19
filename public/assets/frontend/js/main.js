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

// let lead_form = document.querySelectorAll('.lead-form');
// if (typeof(lead_form) !== 'undefined' && lead_form !== null) {
// 	lead_form.forEach(element => {
// 		element.onsubmit = function(e){
// 			let processV = 'Please wait for a moment';
// 			e.preventDefault();
// 			e.target.querySelector('.response-wrapper').innerHTML = `<div class='process'>`+`${processV}`+`</div>`;
// 			let formData = new FormData(e.target);
// 			fetch('api/store-enquiry',{
// 				method: 'POST',
//                 headers: {
//                     'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
//                 },
// 				body: formData
// 			}).then(response => response.json())
// 			.then(data => {
//             console.log(data);
//             if (data.status === true) {
//                 element.reset();
//                 e.target.querySelector('.response-wrapper').innerHTML =
//                     `<div class="success">${data.message}</div>`;
//                 setTimeout(() => {
//                     window.location.reload();
//                 }, 1500);
//             } else {
//                 e.target.querySelector('.response-wrapper').innerHTML =
//                     `<div class="error">${data.message || 'Something went wrong'}</div>`;
//             }
//         })
// 		}
// 	});
// }

// TAB SWITCHING
document.querySelectorAll('.form-tabs').forEach(tabWrapper => {
    let form = tabWrapper.nextElementSibling; // target form

    tabWrapper.querySelectorAll('.tab-btn').forEach(btn => {
        btn.addEventListener('click', function () {
            let type = this.getAttribute('data-type');

            // active class
            tabWrapper.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            let employerFields = form.querySelectorAll('.employer-fields');

            if (type === 'self') {
                employerFields.forEach(el => el.style.display = 'none');

                form.querySelector('[name="designation"]')?.removeAttribute('required');
                form.querySelector('[name="company_name"]')?.removeAttribute('required');

                form.querySelector('[name="user_type"]').value = 'self';
            } else {
                employerFields.forEach(el => el.style.display = 'block');

                form.querySelector('[name="designation"]')?.setAttribute('required', true);
                form.querySelector('[name="company_name"]')?.setAttribute('required', true);

                form.querySelector('[name="user_type"]').value = 'employer';
            }
        });
    });
});


// FORM SUBMIT (UPDATED YOUR CODE)
let lead_form = document.querySelectorAll('.lead-form');

if (lead_form.length > 0) {
    lead_form.forEach(element => {
        element.onsubmit = function(e){
            e.preventDefault();

            let processV = 'Please wait for a moment';
            e.target.querySelector('.response-wrapper').innerHTML =
                `<div class='process'>${processV}</div>`;

            // ✅ IMPORTANT LOGIC (AUTO FILL FOR SELF)
            let userType = element.querySelector('[name="user_type"]').value;

            if (userType === 'self') {
                element.querySelector('[name="designation"]').value = 'Student';
                element.querySelector('[name="company_name"]').value = 'My Self';
            }

            let formData = new FormData(element);

            fetch('api/store-enquiry',{
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);

                if (data.status === true) {
                    element.reset();

                    // reset tab UI also
                    element.querySelector('[name="user_type"]').value = 'employer';
                    element.querySelectorAll('.employer-fields').forEach(el => el.style.display = 'block');

                    e.target.querySelector('.response-wrapper').innerHTML =
                        `<div class="success">${data.message}</div>`;

                    setTimeout(() => {
                        window.location.reload();
                    }, 1500);

                } else {
                    e.target.querySelector('.response-wrapper').innerHTML =
                        `<div class="error">${data.message || 'Something went wrong'}</div>`;
                }
            });
        }
    });
}

