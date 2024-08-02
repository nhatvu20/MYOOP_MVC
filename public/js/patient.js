function _apiGet(url, data){
    if(!data){
        data = {};
    }
    $.ajax({
        url: url,
        type: 'GET',
        data: data,
        success: function(result, status, erro){
            alert(result);
        },
        error : function (req, status, error) {
            alert (req + " " + status + " " + error); 
        } 
    })
}
function addPatient(){
    var name = document.getElementById('name').value;
    var gender = document.getElementById('gender').value;
    alert(name + " " + gender);
    data = {
        action: "addPatients",
        controller: "patient",
        name: name,
        gender: gender,
    }
    _apiGet("../../../public/index.php", data);
}

function updatePatient(){
    var id = document.getElementById('id').value;
    var name = document.getElementById('name').value;
    var gender = document.getElementById('gender').value;
    alert(id + " " + name + " " + gender);
    data = {
        action: "updatePatients",
        controller: "patient",
        id: id,
        name: name,
        gender: gender,
    }
    _apiGet("../../../public/index.php", data);
}