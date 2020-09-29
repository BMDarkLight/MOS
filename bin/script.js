/* M Edition Javascript */
var page = document;

console.log('Starting M Edition OS ...');
setTimeout(function () {console.log('Starting M Edition OS ... Done');},500);

function id(id) {
    return page.getElementById(id);
}

function move(elem,time,end) {
    var id = setInterval(frame, time);
    var width = 0;
    function frame() {
        if (width >= 100) {
            setTimeout(end,1);
            elem.style.display = 'none';
            clearInterval(id);
        } else {
            width = width + 0.1;
            elem.style.width = width + '%';
        }
    }

    console.log('os progress -moving -' + elem);
}

function typeWriter(elem,txt,speed = 50) {
    var i = 0;
    console.log('os type -close_write -'+elem);
    elem.innerHTML = '';
    updateWriter();
    function updateWriter() {
        if (i < txt.length) {
            elem.innerHTML += txt.charAt(i);
            i++;
            setTimeout(updateWriter, speed);
        } else {
            clearInterval();
            console.log('os type -close_write -' + elem);
        }
    }
}

function dragElement(elmnt,head) {
    var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
    head.onmousedown = dragMouseDown;

    function dragMouseDown(e) {
        e = e || window.event;
        e.preventDefault();
        // get the mouse cursor position at startup:
        pos3 = e.clientX;
        pos4 = e.clientY;
        document.onmouseup = closeDragElement;
        // call a function whenever the cursor moves:
        document.onmousemove = elementDrag;
    }

    function elementDrag(e) {
        e = e || window.event;
        e.preventDefault();
        // calculate the new cursor position:
        pos1 = pos3 - e.clientX;
        pos2 = pos4 - e.clientY;
        pos3 = e.clientX;
        pos4 = e.clientY;
        // set the element's new position:
        elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
        elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
    }

    function closeDragElement() {
        /* stop moving when mouse button is released:*/
        document.onmouseup = null;
        document.onmousemove = null;
    }
}

function nothing() {
    console.log('os event -empty_event');
    return null;
}

function typetime(elem) {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    elem.innerHTML = h + ":" + m + ":" + s;
    var t = setTimeout(function () {typetime(elem)}, 500);
}

function checkTime(i) {
    if (i < 10) {
        i = "0" + i
    }
    return i;
}

function alert(text) {
    var x = document.createElement('div');
    x.id = 'snackbar';
    x.innerHTML = text;
    document.body.appendChild(x);
    x.className = "show";
    console.log('os alert -open "'+text+'"');
    setTimeout(function(){x.className = x.className.replace("show", "");x.parentNode.removeChild(x);console.log('os alert -close ' + x);x = null;}, 4000);
}

function log(text) {
    var x = document.createElement('div');
    x.style = 'font-family: sans-serif;font-size: 8pt;background-color: black;color: whitesmoke;';
    x.innerHTML = text;
    document.body.appendChild(x);
    x.className = "show";
    console.log('os alert -open "'+text+'"');
    setTimeout(function(){x.className = x.className.replace("show", "");x.parentNode.removeChild(x);console.log('os alert -close ' + x);x = null;}, 4000);
}

function initDraw(canvas) {
    var mouse = {
        x: 0,
        y: 0,
        startX: 0,
        startY: 0
    };
    function setMousePosition(e) {
        var ev = e || window.event; //Moz || IE
        if (ev.pageX) { //Moz
            mouse.x = ev.pageX + window.pageXOffset;
            mouse.y = ev.pageY + window.pageYOffset;
        } else if (ev.clientX) { //IE
            mouse.x = ev.clientX + document.body.scrollLeft;
            mouse.y = ev.clientY + document.body.scrollTop;
        }
    };

    var element = null;
    canvas.onmousemove = function (e) {
        setMousePosition(e);
        if (element !== null) {
            element.style.width = Math.abs(mouse.x - mouse.startX + 10) + 'px';
            element.style.height = Math.abs(mouse.y - mouse.startY) + 'px';
            element.style.left = (mouse.x - mouse.startX < 0) ? mouse.x + 'px' : mouse.startX + 'px';
            element.style.top = (mouse.y - mouse.startY < 0) ? mouse.y + 'px' : mouse.startY + 'px';
        }
    };

    canvas.onclick = function (e) {
        if (element !== null) {
            element.style.opacity = '0';
            setTimeout(function () {element.parentNode.removeChild(element);},400);
            element = null;
        } else {
            console.log('os init Drawer -start');
            mouse.startX = mouse.x;
            mouse.startY = mouse.y;
            element = document.createElement('div');
            element.id = 'rectangle';
            element.style.opacity = '0.7';
            element.style.transition = "opacity 0.4s";
            element.style.border = '1px solid magenta';
            element.style.backgroundColor = '#ff99ff';
            element.style.position = 'fixed';
            element.style.left = mouse.x + 'px';
            element.style.top = mouse.y + 'px';
            canvas.appendChild(element);
        }
    };

    canvas.onmouseup = function (e) {
        element.style.opacity = '0';
        setTimeout(function () {element.parentNode.removeChild(element);},400);
        element = null;
        console.log('os init Drawer -close()');
    }
}