var i = 0;


// function textBoxCreated() {
//     e.preventDefault
//   var y = document.createElement('INPUT');
//   y.setAttribute("type", "text");
//   y.setAttribute("Placeholder", "Name");
//   y.setAttribute("Name", "organisation[]");
//   document.getElementById("myForm").appendChild(y);
//   i++;
// }

document.querySelector(".semiomolope").addEventListener('click', textBoxCreated);

function textBoxCreated() {
    event.preventDefault();

    if (i <= 10) {
        document.querySelector('.addinput').innerHTML += `
        <div class="col-sm-12 col-lg-2 col-md-2 mt-3">
            <select name="institution_type[]" class="form-control">
                <option disabled selected value="selected">--select--</option>
                <option value="primary">Primary</option>
                <option value="secondary">Secondary</option>
                <option value="tertiary">Tertiary</option>
                <option value="professional">Professional</option>
            </select>
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


