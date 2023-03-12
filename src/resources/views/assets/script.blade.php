<script type="text/javascript">
let userInput = document.getElementsByClassName("user-input");
if (userInput.length) {
    for (i = 0; i < userInput.length; i++) {
        userInput[i].addEventListener("blur", function() { 
            this.value = this.value.replace(" ", "_");
        });
    }
}
function closeCurrentWindow() {
    window.close();
}
function runCommand(command) {
    
    let elem = '';
    let successMsg = '';
    let errorMsg = '';
    let isRerun = ''; 
    let tabKey = ''; 
    let argums = ''; 
    let cmd = '';
    let param = '';
    let paramValue = '';
    let cmdName = '';
    let tabName = '';

    elem = document.getElementById(command);
    successMsg = elem.dataset.smgs;
    isRerun = 'YES';
    if (elem.dataset.emgs && typeof elem.dataset.emgs !== "undefined") {
        errorMsg = elem.dataset.emgs;
    }
    if (elem.dataset.rerun && typeof elem.dataset.rerun !== "undefined") {
        isRerun = elem.dataset.rerun;
    }
    if (elem.dataset.tabkey && typeof elem.dataset.tabkey !== "undefined") {
        tabKey = elem.dataset.tabkey;
    }
    if (elem.dataset.argums && typeof elem.dataset.argums !== "undefined") {
        argums = elem.dataset.argums;
    }
    if (elem.dataset.cmd && typeof elem.dataset.cmd !== "undefined") {
        cmd = elem.dataset.cmd;
    }
    if (elem.dataset.param && typeof elem.dataset.param !== "undefined") {
        param = elem.dataset.param;
        paramValue = document.getElementById(command + '-param').value;
        if (paramValue == '' || paramValue == null) {
             document.getElementById(command + '-param').focus();
            return false;
        }
    }
    if (document.getElementById(command + '-cmdName') != null) {
        cmdName = document.getElementById(command + '-cmdName').value;
        if (cmdName == '' || cmdName == null) {
            document.getElementById(command + '-cmdName').focus();
            return false;
        }
    }
    if (document.getElementById(command + '-tabName') != null) {
        tabName = document.getElementById(command + '-tabName').value;
        if (tabName == '' || tabName == null) {
            document.getElementById(command + '-tabName').focus();
            return false;
        }
    }

    if (command && command != null && typeof command !== "undefined") {
        document.getElementById(command).textContent = 'Wait...';
        document.getElementById(command).setAttribute("disabled", "disabled");
        document.getElementById(command).classList.remove('btn-view');
        document.getElementById(command).classList.add('btn-running');
        document.getElementById('responseText').innerHTML = '';

        const xhr = new XMLHttpRequest();
        const url = "{{ route('artisan-ui.runCommand') }}?exec_command=" + command + '&succ_msg=' + successMsg + '&err_msg=' + errorMsg + '&rerun=' + isRerun + '&tab_key=' + tabKey + '&argums=' + argums + '&cmd=' + cmd + '&param=' + param + '&param_value=' + paramValue + '&cmd_name=' + cmdName + '&tab_name=' + tabName;
        xhr.open("GET", url, true);
        xhr.setRequestHeader("X-Requested-With", 'XMLHttpRequest');
        xhr.setRequestHeader('X-CSRF-TOKEN', "{{ csrf_token() }}");
        xhr.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
        //xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onload = () => {
            //console.log(xhr);
            if (xhr.readyState == 4 && xhr.status == 200 && xhr.responseText != '') {
                let jObj = JSON.parse(xhr.responseText);
                if (jObj.is_success == 'OK') {
                    document.getElementById(command).textContent = jObj.btn_text;
                    document.getElementById(command).removeAttribute("disabled");
                    document.getElementById(command).classList.add('btn-view');
                    document.getElementById(command).classList.remove('btn-running');
                    document.getElementById('responseText').innerHTML = jObj.response_msg;
                    if (jObj.rerun == 'YES') {
                        setTimeout(function () {
                            document.getElementById(command).textContent = 'Done! - Run Again?';
                            document.getElementById(command).classList.remove('btn-view');
                            document.getElementById(command).classList.add('done-again');
                        }, 5000);
                    }
                }

                if (jObj.is_success == 'ERROR') {
                    document.getElementById('responseText').innerHTML = jObj.response_msg;
                    document.getElementById(command).textContent = jObj.btn_text;
                    document.getElementById(command).removeAttribute("disabled");
                    document.getElementById(command).classList.remove('btn-view');
                    document.getElementById(command).classList.remove('btn-running');
                    document.getElementById(command).classList.remove('done-again');
                    document.getElementById(command).classList.add('btn-danger');
                    if (jObj.rerun == 'YES') {
                        setTimeout(function () {
                            document.getElementById(command).textContent = 'Error! - Try Again?';
                        }, 5000);
                    }
                }
            } 
        };
        xhr.send();
    }
}
function searchArtisanUI(searchText) {
    var filter, table, tr, td, i, txtValue;
    filter = searchText.toLowerCase();
    table = document.getElementById("artisanUI");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toLowerCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }       
    }
}
function argumentCkb(thisVal, thisId, stringId, cmdBtnId) {
    let argusArr = [];
    if (thisVal != '' && stringId != '' && thisId != '' && cmdBtnId != '' && document.getElementById(stringId) != null) {
        argusArr = document.getElementById(stringId).innerHTML.trim().split(' ');
        if (document.getElementById(thisId).checked) {
            argusArr.push('--' + thisVal);
        } else {
            argusArr.splice(argusArr.indexOf('--' + thisVal), 1);
        }
        argusArr = argusArr.filter(function (x, i, a) { 
            return a.indexOf(x) === i; 
        });
        document.getElementById(stringId).innerHTML = argusArr.join(' ');
        document.getElementById(cmdBtnId).dataset.argums = argusArr.join('_');
        document.getElementById(cmdBtnId).dataset.argums = document.getElementById(cmdBtnId).dataset.argums.replace(/--/g, '');
    }
}
function argumentRdb(thisVal, thisId, stringId, cmdBtnId) {
    let argusArr = [];
    if (thisVal != '' && stringId != '' && thisId != '' && cmdBtnId != '' && document.getElementById(stringId) != null) {
        if (document.getElementById(thisId).checked) {
            argusArr.push('--' + thisVal);
        } else {
            argusArr.splice(argusArr.indexOf('--' + thisVal), 1);
        }
        argusArr = argusArr.filter(function (x, i, a) { 
            return a.indexOf(x) === i; 
        });
        document.getElementById(stringId).innerHTML = argusArr.join(' ');
        document.getElementById(cmdBtnId).dataset.argums = argusArr.join('_');
        document.getElementById(cmdBtnId).dataset.argums = document.getElementById(cmdBtnId).dataset.argums.replace(/--/g, '');
    }
}
</script>