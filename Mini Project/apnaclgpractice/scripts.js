// // alert("Click ok to start!")
// // console.log("Hello welcome")
// // console.dir(window.document  )

// // Accessing Element by ID
// // let headingvar = document.getElementById("heading");
// // console.log(headingvar);
// // console.dir(headingvar);

// // Accessing Element by class - returns html collection
// // let classvar=document.getElementsByClassName("btn");
// // console.log(classvar);
// // console.dir(classvar);

// // Accessing Element by Tagname - returns html collection
// // let tagvar=document.getElementsByTagName("p")
// // console.log(tagvar);
// // console.dir(tagvar);

// // Accessing Element by ElementName - returns html collection
// // let namevar=document.getElementsByName("fname")
// // console.log(namevar);
// // console.dir(namevar);

// // Query selector - returns Nodelist
// // let firstchild=document.querySelector("p");
// // console.log(firstchild);

// // let allchild=document.querySelectorAll("p");
// // console.log(allchild);

// // accessing Element Properties _we can get, set, update values of elements
// // tagnName -returns elements tagname like GamepadButton,p,h1 etc.
// // innerHtml - returns the plain text or html content of the page. 
// // innerText- returns the text of the elements and all its childers.
// // textContent - returns textual content even for hidden elements.

// // let div=document.querySelector("div");
// // console.dir(div);
// // console.log("Inner text : ",div.innerText);
// // console.log("innerHTML : ",div.innerHTML);
// // console.log("tagname : ",div.tagName);
// // console.log("TextContent : ",div.textContent);
// // // div.innerText="flowers\nrose\ntulip\nmarigold\nsunflower" - To Set the values using innerText  

// // let id=div.getAttribute("id");
// // console.log(id)

// // let name1=div.getAttribute("name");
// // console.log(name1)

// // let p=document.querySelector("p");
// // console.dir(p);
// // let para=p.setAttribute("class","paraCommando");
// // let para1=p.getAttribute("class");
// // console.log(para1)

// // let div=document.querySelector("div");
// // div.style.backgroundColor="white";
// // div.style.color="whiye";
// // div.style.padding="20px";
// // div.style.border="10px solid lightgreen";
// // div.style.fontSize="35px";
// // // div.style.visibility="Hidden";
// // div.innerText="this text is changed from innertext"

// // Create new bytton in div
// // let newbtn=document.createElement("button");
// // newbtn.innerText="newbtn";


// // let div=document.querySelector("div");
// // div.append(newbtn);// add the button at the end of the div
// // div.prepend(newbtn) //add the button at the start of the div
// // div.before(newbtn) //add the button at the just befor the start of the div
// // div.after(newbtn) //add the button at the just after the start of the div

// let heading=document.createElement("h1");
// heading.innerHTML="<strong><i>this is the new heading</i></strong>";

// document.querySelector("body").prepend(heading);

// let p=document.querySelector("p");
// p.remove(); 

// Event Handling in js

console.log("Hi")

let btn1 = document.getElementById("btn1");
// btn1.onclick = function (evt) {
//     console.log("btn1 was clicked")
//     let a=25;
//     a+=a;
//     console.log(a);
//     console.log(evt);
//     console.log(evt.type);
//     console.log(evt.target);
//     console.log(evt.clientX,evt.clientY);

// }


// let div=document.querySelector("div");
// div.onmouseover =(evt)=>{
//     // console.log("you are inside div");
//     // let a=25;
//     // a+=a;
//     // console.log(a);
//     // div.style.opacity=0.5;

//     // console.log(evt);
//     // console.log(evt.type);
//     // console.log(evt.target);
//     // console.log(evt.clientX,evt.clientY);
// }

// remove Eventhandler 
// btn1.addEventListener("click",(evt)=>{
//     console.log("btn1 was clicked");
//      console.log(evt);
//     console.log(evt.type);
//     console.log(evt.target);
//     console.log(evt.clientX,evt.clientY);
// })

// btn1.addEventListener("click",()=>{
//     console.log("btn1 was clicked -handler 1");
// })
// btn1.addEventListener("click",()=>{
//     console.log("btn1 was clicked -handler 2");
// })
// let handler3=()=>{
//     console.log("btn1 was clicked -handler 3");
// } 
// btn1.addEventListener("click",handler3); 

// btn1.addEventListener("click",()=>{
//     console.log("btn1 was clicked -handler 4");
// })

// // remove Eventhandler 
// btn1.removeEventListener('click',handler3);

let modebtn = document.querySelector(".toggle");
let currMode = "light";
let body = document.querySelector("body");

modebtn.addEventListener("click", () => {
    // console.log("you are trying to change theme")
    if (currMode === "light") {
        currMode = "dark";
        modebtn.style.backgroundColor = "white";
        modebtn.style.color = "black";
        // document.querySelector("body").style.backgroundColor="Black";
        // document.querySelector("body").style.color="white";
        body.classList.add("dark");
        body.classList.remove("light");

    }
    else {
        currMode = "light";
        modebtn.style.backgroundColor = "Black";
        modebtn.style.color = "white";
        // document.querySelector("body").style.backgroundColor="white";
        // document.querySelector("body").style.color="black";
        body.classList.add("light");
        body.classList.remove("dark");

    }
    console.log(currMode)
})