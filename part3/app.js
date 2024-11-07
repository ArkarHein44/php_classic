//UI 

var getdots = document.getElementsByClassName('dot');   //htmlCollection
var getpages = document.getElementsByClassName("page");  
// console.log(getpages) 
var getform = document.getElementById("form"); 
var getprevbtn = document.getElementById("prevbtn");
var getnextbtn = document.getElementById("nextbtn");
var getresultcontainer = document.getElementById("result-container");
var pagekeys = [
    ['email',"password","newsletter","newsletter"], // Page 1 : Security
    ["firstname","lastname","profile"],                       // Page 2 : Personal Info
    ["dob"],                                        // Page 3 : Date Of Birth
    ["phone","address","documents","documents"]     // Page 4 : Contact Info
]; 

var datas = [];

let curridx = 0; 

showpage(curridx); 

//currentidx  0 1 2 3
//gonow or next  1 2 3 4 

function showpage(num){
    // console.log(num);  
    // getpages[num].style.display = "block"; 

    const pages = document.querySelectorAll('.page');
    pages.forEach((page,index)=>{
        page.style.display = index === num ? "block" : "none";
    })

    num === 0 ? getprevbtn.style.display  = "none" : getprevbtn.style.display = "inline-block"  

    num === (getpages.length-1) ? getnextbtn.textContent = "Submit" : getnextbtn.textContent = "Next"

    dotindicator(num);
}
 
function dotindicator(num){
    // console.log(num);  

    for(var x = 0; x < getdots.length; x++){
        getdots[x].classList.remove('active');
    }

    getdots[num].className += ' active'
}

function gonow(num){

    // console.log(num);  // 1 mean page 2
    // // console.log(` ${curridx}`); //0 

    // getpages[curridx].style.display = "none";
    // curridx = curridx+num;  
    // console.log(`current ${curridx}`); //1 

    // if(curridx >= getpages.length){
    //     getform.submit();
    // }
    // showpage(curridx); 
    // console.log(formvalidation())

    if(formvalidation()){
        getpages[curridx].style.display = 'none'; 
        curridx = curridx+num; 

        if(curridx >= getpages.length){
            // getform.submit();
            getform.style.display = "none"; 
            getresultcontainer.style.display = "block";

            result(datas);
        }

        showpage(curridx);
        
        
        
    }
    
} 


function formvalidation(){
    var valid = true; 

    var getcurrentinput = getpages[curridx].getElementsByTagName('input');
    // console.log(getcurrentinput);
    // console.log(getcurrentinput[0].value);

    // datas = [
    //             [{
    //                 email:"root@gmail.com";
    //                 password:"012345",
    //                 newsletter:1
    //             }],
    //             [{
    //                 firstname:"aung",
    //                 lastname:"kyaw"
    //             }]
    //         ]

    // datas[0][newsletter] = 1

    if(!datas[curridx]){
        datas[curridx] = {};
    }

    let currpagekeys = pagekeys[curridx];

    for(var x=0; x < getcurrentinput.length; x++){
        // console.log(getcurrentinput[x].value);  

        let input = getcurrentinput;
        let key = currpagekeys[x];

        if(input.type === "radio"){

            if(input.checked){
                datas[curridx][key] = input.value;
            }

        }else if(input.type === "checkbox"){
            if(!datas[curridx][key]){
                datas[curridx][key] = [];
            }

            if(input.checked){
               datas[curridx][key].push(input.value); 
            }
            
            
        }else if((input.value).trim() === ''){
            input.classList.add('error');
            valid = "false";
        }else{
            input.classList.remove('error');
            datas[curridx][[key]] = input.value;
        }
        
      

        // console.log(datas);
    } 

    if(valid){
        getdots[curridx].className += " done"; 
    }

    // console.log(valid);
    return valid;
} 

function result(data){
    // console.log(data);

    const documentlist = data[3].documents.length > 0 ? data[3].documents.join(',') : "No Data";

    getresultcontainer.innerHTML = `
    <ul>
        <li>Name : ${data[1].firstname} ${data[3].lastname}</li>
        <li>Agree : ${data[1].newsletter === '1' ? 'Yes' : "No"}</li>
        <li>Email :${data[0].email}</li>
        <li>Profile :${data[1].profile}</li>
        <li>Date of Birth: ${data[2].dob}</li>
        <li>Phone number: ${data[3].phone}</li>
        <li>Address: ${data[3].address}</li>
        <li>Documents: ${documentlist}</li>
    </ul>
    <button type="submit" class="submit-btn" onclick="submitbtn()" >Apply Now</button> 

    `;
} 

function submitbtn(){
    getform.submit(); 
}





