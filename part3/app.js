// UI
var getdots = document.getElementsByClassName('dot');
var getpages = document.getElementsByClassName('page');

//console.log(getdots);

var getform = document.getElementById('form');
var getprevbtn = document.getElementById('prevbtn');
var getnextbtn = document.getElementById('nextbtn');
var getresultcontainer = document.getElementById('result-container');
var objkeys = ["email","password","firstname","lastname","dob","phone","address"];
var datas = [{
}]

let curridx = 0;

showpage(curridx);

// 0 1 2 3
// 1 2 3 4

function showpage(num){
    // console.log(num);

    getpages[num].style.display = "block";

    num === 0 ? getprevbtn.style.display = "none" : getprevbtn.style.display = "inline-block";

    num === (getpages.length-1) ? getnextbtn.textContent = "Submit" : getnextbtn.textContent = "Next";

    dotindicator(num);
}

function dotindicator(num){
    // console.log(num);

    for(var x =0; x < getdots.length; x++){
        getdots[x].classList.remove('active');
    }

    getdots[num].className += " active";
}

function gonow(num){
    // console.log(num); // 1
    // console.log(curridx); // 0

    // getpages[curridx].style.display = "none";
    // curridx = curridx+num;

    // console.log(curridx);

    // if(curridx >= getpages.length){
    //     getform.onsubmit();
    // }

    // showpage(curridx);

    // formvalidation();

    if(formvalidation()){
        getpages[curridx].style.display = "none";
        curridx = curridx+num;

        if(curridx >= getpages.length){
            // getform.onsubmit();

            getform.style.display = "none";
            getresultcontainer.style.display = "block";

            result(datas);
        }

        showpage(curridx);
    }



}

function* genfun(){
    var index = 0;
            // 0 <7
    while(index < objkeys.length){
        yield index++;
    }
}

// console.log(genfun().next().value);

let gen = genfun();
// console.log(gen.next().value); // 0
// console.log(gen.next().value); // 1

function formvalidation(){
    var valid = true;

    var getcurrentinput = getpages[curridx].querySelectorAll('.form-control');

    // console.log(getcurrentinput);
    // console.log(getcurrentinput[2].value);

    for(var x = 0; x < getcurrentinput.length; x++){
        // console.log(getcurrentinput[x].value;

        if((getcurrentinput[x].value).trim() === ''){
            getcurrentinput[x].classList.add('error');
            valid = false;
        }else{
            // console.log('x value is = ',x);
            // console.log(objkeys[x]);
            // console.log(getcurrentinput[x].value);

            // console.log("gen value is = ", gen.next().value);

            // Method 1
            // const keys = objkeys[gen.next().value];
            // console.log(keys);
            // const values = getcurrentinput[x].value;
            // console.log(values);
            // const obj = {
            //     [keys]:values
            // };
            // datas.push(obj);

            // Method 2
            // const keys = objkeys[gen.next().value];
            // console.log(keys);
            // const values = getcurrentinput[x].value;
            // console.log(values);
            // var obj = {};
            // obj[keys] = values
            // datas.push(obj);
           
            // Method 3
            const keys = objkeys[gen.next().value];
            const values = getcurrentinput[x].value;
            datas.push({[keys]:values});

        }
    }

    // console.log(datas);
    
    if(valid){
        getdots[curridx].className += " done";
    }

    // console.log(valid);
    return valid;
}

function result(data){

    console.log(data);

    getresultcontainer.innerHTML = `
        <ul>
            <li>Name : ${data[2].firstname} ${data[3].lastname}<li>
            <li>Email : ${data[0].email}<li>
            <li>Date Of Birth : ${data[4].dob} <li>
            <li>Phone Number : ${data[5].phone} <li>
            <li>Address : ${data[6].address} <li>
        </ul>

        <button type="submit" class="submit-btn" onclick="submitbtn()">Apply Now</button>
    `
}