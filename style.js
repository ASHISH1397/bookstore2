
var year,semester,subject,course,data;
var f='D.C.O';
function def2()
{
    var d=document.querySelector("#semesterSelect");
    console.log(d.value);
    semester=d.value;
}
function def3()
{
    var d=document.querySelector("#SubjectSelect");    
    subject=d.value;
    localStorage.setItem('abcd',subject);
console.log(subject);
}
function def4()
{
    var d=document.querySelector("#yearSelect");
    year=d.value;

}
function adddata()
{var x=new Map();
  x.set('D.C.O', [['Design Patterns: Elements of Reusable Object-Oriented Software','writer-name:harry potter', 'this is a book description'
,'https://books.google.co.in/books?id=6oHuKQe3TjQC&source=gbs_slider_cls_metadata_0_mylibrary&redir_esc=y'],
['Design Patterns: Elements of Reusable Object-Oriented Software','writter-name:harry potter', 'qux','https://books.google.co.in/books?id=6oHuKQe3TjQC&source=gbs_slider_cls_metadata_0_mylibrary&redir_esc=y']]);
x.set('C', ['Design Patterns: Elements of Reusable Object-Oriented Software','writter-name:harry potter', 'qux',
,'https://books.google.co.in/books?id=6oHuKQe3TjQC&source=gbs_slider_cls_metadata_0_mylibrary&redir_esc=y']);
   container=document.getElementById("all-books");
   //      var d=document.querySelector("#semesterSelect");
   var sid=localStorage.getItem('abcd');
  var arr=x.get(sid);
  for(var i=0;i<arr.length;i++)
  {
  var x=document.createElement('div');
  var y=document.createElement('div');
  var z=document.createElement('a');
  var a=document.createElement('div');
  var b=document.createElement('div');
  var c=document.createElement('div');
  var d=document.createElement('img');
  x.setAttribute("id","Book");
  x.setAttribute("class","Book");
  d.setAttribute("id","image1");
  d.setAttribute("class","image1");
  d.setAttribute("src","./Images/sample-book-img.jpeg")
  y.setAttribute("id","imageContainer");
  y.setAttribute("class","imageContainer");
  z.setAttribute("id","a");
  z.setAttribute("class","a");
  z.setAttribute("href",arr[i][3]);
  a.setAttribute("id","book-title");
  a.setAttribute("class","book-title");
  a.innerHTML=arr[i][0];
  b.setAttribute("id","writers");
  b.setAttribute("class","writers");
  b.innerHTML=arr[i][1];
  c.setAttribute("id","book-desc");
  c.setAttribute("class","book-desc");
  c.innerHTML=arr[i][2];
  container.appendChild(x);
  x.appendChild(y);
  y.appendChild(z);
  z.appendChild(d);
  x.appendChild(a);
  x.appendChild(b);
    x.appendChild(c);  
  
}
}
var year,semester,subject,course,data;
var f='D.C.O';
function def2()
{
    var d=document.querySelector("#semesterSelect");
    console.log(d.value);
    semester=d.value;
}
function def3()
{
    var d=document.querySelector("#SubjectSelect");    
    subject=d.value;
    localStorage.setItem('abcd',subject);
console.log(subject);
}
function def4()
{
    var d=document.querySelector("#yearSelect");
    year=d.value;

}
function adddata()
{var x=new Map();
  x.set('D.C.O', [['Design Patterns: Elements of Reusable Object-Oriented Software','writer-name:harry potter', 'this is a book description'
,'https://books.google.co.in/books?id=6oHuKQe3TjQC&source=gbs_slider_cls_metadata_0_mylibrary&redir_esc=y'],
['Design Patterns: Elements of Reusable Object-Oriented Software','writter-name:harry potter', 'qux','https://books.google.co.in/books?id=6oHuKQe3TjQC&source=gbs_slider_cls_metadata_0_mylibrary&redir_esc=y']]);
x.set('C', ['Design Patterns: Elements of Reusable Object-Oriented Software','writter-name:harry potter', 'qux',
,'https://books.google.co.in/books?id=6oHuKQe3TjQC&source=gbs_slider_cls_metadata_0_mylibrary&redir_esc=y']);
   container=document.getElementById("all-books");
   //      var d=document.querySelector("#semesterSelect");
   var sid=localStorage.getItem('abcd');
  var arr=x.get(sid);
  for(var i=0;i<arr.length;i++)
  {
  var x=document.createElement('div');
  var y=document.createElement('div');
  var z=document.createElement('a');
  var a=document.createElement('div');
  var b=document.createElement('div');
  var c=document.createElement('div');
  var d=document.createElement('img');
  x.setAttribute("id","Book");
  x.setAttribute("class","Book");
  d.setAttribute("id","image1");
  d.setAttribute("class","image1");
  d.setAttribute("src","./Images/sample-book-img.jpeg")
  y.setAttribute("id","imageContainer");
  y.setAttribute("class","imageContainer");
  z.setAttribute("id","a");
  z.setAttribute("class","a");
  z.setAttribute("href",arr[i][3]);
  a.setAttribute("id","book-title");
  a.setAttribute("class","book-title");
  a.innerHTML=arr[i][0];
  b.setAttribute("id","writers");
  b.setAttribute("class","writers");
  b.innerHTML=arr[i][1];
  c.setAttribute("id","book-desc");
  c.setAttribute("class","book-desc");
  c.innerHTML=arr[i][2];
  container.appendChild(x);
  x.appendChild(y);
  y.appendChild(z);
  z.appendChild(d);
  x.appendChild(a);
  x.appendChild(b);
    x.appendChild(c);  
  
}
}