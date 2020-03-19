var i = 0;

document.querySelector(".semimolope").addEventListener('click', anotherInput);

function anotherInput() {
    event.preventDefault();

    if (i <= 10) {
        document.querySelector('.addinput').innerHTML += `
        <div class="col-sm-12 col-lg-2 col-md-2 mt-3">
            <input type="text" name="name[]" class="form-control" placeholder="Refree Name">
        </div>

        <div class="col-sm-12 col-lg-2 col-md-2 mt-3">
            <input type="text" name="position[]" class="form-control" placeholder="Position">
        </div>

        <div class="col-sm-12 col-lg-2 col-md-2 mt-3">
            <input type="text" name="work_address[]" class="form-control" placeholder="Address">
        </div>

        <div class="col-sm-12 col-lg-3 col-md-3 mt-3">
            <input name="phone_number[]" class="form-control" placeholder="Please Enter Phone Number">
        </div>

        <div class="col-sm-12 col-lg-3 col-md-3 mt-3">
            <input type="text" name="mail[]" class="form-control" placeholder="Please Enter Phone Number">
        </div>
        `;
        i++;
    }

}