function removedata()
{    
    var e=document.getElementById("semesterList");
    var child=e.childNodes;
    var s=child.length;
    console.log(s);
    for(i=0;i<s;i++)
    {
        var d=child[0];
        console.log(d.nodeName);
       console.log(i);
       if(d.nodeName==="#text")
       {
       e.removeChild(d);
       }
        if(d.nodeName==="LI")
        {
        var q=d.childNodes;
        d.removeChild(q[0]);
        e.removeChild(d);
    }
}
}
function savedata() 
{        
    var x=new Map();
x.set('electrical',["I","II","III","IV","V","VI","VII","VIII"]);
x.set('btech_cs',["I","II","III","IV","V","VI","VII","VIII"]);
x.set('btech_ece',["I","II","III","IV","V","VI","VII","VIII"]);
x.set('btech_eee',["I","II","III","IV","V","VI","VII","VIII"]);
x.set('btech_electronics',["I","II","III","IV","V","VI","VII","VIII"]);
x.set('btech_civil',["I","II","III","IV","V","VI","VII","VIII"]);
x.set('btech_mechanical',["I","II","III","IV","V","VI","VII","VIII"]);
x.set('btech_chemical',["I","II","III","IV","V","VI","VII","VIII"]);
x.set('mca',["I","II","III","IV","V","VI"]);
x.set('mba',["I","II","III","IV"]);
x.set('mtech_cs',["I","II","III","IV"]);
x.set('mtech_ece',["I","II","III","IV"]);
x.set('mtech_eee',["I","II","III","IV"]);
x.set('mtech_electronics',["I","II","III","IV"]);
x.set('mtech_civil',["I","II","III","IV"]);
x.set('mtech_mechanical',["I","II","III","IV"]);
x.set('mtech_chemical',["I","II","III","IV"]);   
         y=document.getElementsByName('courses');
 sid=document.getElementById('semesterList');

      for(i=0;i<y.length;i++)
      {
        if(y[i].checked)
        {
            console.log(y[i].value);
            // localStorage.setItem('sid',y[i].value);
            var z=x.get(y[i].value);   
            for(j=0;j<z.length;j++)
            {console.log(z[j]);
                var x=document.createElement('LI');
                var y=document.createElement('input');
                x.innerHTML=z[j];
                y.setAttribute('type','radio');
                y.setAttribute('name','semester');
                y.setAttribute('value',z[j]);
                x.appendChild(y);
                sid.appendChild(x);
            }
        }
      }
} 
  
function adddata()
{

}