var i = 0;

document.querySelector(".semimolope").addEventListener('click', anotherInput);

function anotherInput() {
    event.preventDefault();

    if (i <= 10) {
        document.querySelector('.addinput').innerHTML += `
        <div class="col-sm-12 col-lg-2 col-md-2">
            <input type="text" name="organisation[]" class="form-control" placeholder="organisation">
        </div>

        <div class="col-sm-12 col-lg-2 col-md-2 mt-3">
            <input type="date" name="from_date[]" class="form-control" placeholder="organisation">
        </div>

        <div class="col-sm-12 col-lg-2 col-md-2 mt-3">
            <input type="date" name="to_date[]" class="form-control" placeholder="organisation">
        </div>

        <div class="col-sm-12 col-lg-6 col-md-6 mt-3">
            <textarea name="qualification[]" class="form-control" placeholder="organisation"></textarea>
        </div>`;
        i++;
    }

}