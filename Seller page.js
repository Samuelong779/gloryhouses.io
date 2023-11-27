function setupImageUpload(imageId, labelId) {
    document.getElementById(imageId).addEventListener('click', function() {
        var input = document.createElement('input');
        input.type = 'file';

        input.click();

        input.addEventListener('change', function() {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    var image = document.getElementById(imageId);
                    image.src = e.target.result;

                    image.style.width = '500px';
                    image.style.height = '250px';
                };

                reader.readAsDataURL(input.files[0]);
            }
        });
    });
}

setupImageUpload('userImage1', 'imageInputLabel1');

setupImageUpload('userImage2', 'imageInputLabel2');

setupImageUpload('userImage3', 'imageInputLabel3');

setupImageUpload('userImage4', 'imageInputLabel4');

setupImageUpload('userImage5', 'imageInputLabel5');