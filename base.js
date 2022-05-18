function get(key, host = '', pkg, repo, branch = '', user, bulk)
{
    if (window.XMLHttpRequest) {
        xmlhttp=new XMLHttpRequest();
    } else {
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            if (bulk !== true) {
                document.location.reload();
            }
        }
    }
    xmlhttp.open("GET","get.php?key="+key+"&host="+host+"&pkg="+pkg+"&repo="+repo+"&branch="+branch+"&user="+user,false);
    xmlhttp.send();
}
function find()
{
    var q = search.value;
    if (window.XMLHttpRequest) {
        xmlhttp=new XMLHttpRequest();
    } else {
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            window.location.href = "?q="+q;
        }
    }
    xmlhttp.open("GET","?q="+q,false);
    xmlhttp.send();
}
