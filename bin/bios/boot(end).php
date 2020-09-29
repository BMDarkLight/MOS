<html>
    <head>
        <title>VMOS - Cross-Platform BIOS</title>
    </head>
    <body style="background-color: black;color: antiquewhite;">
        <code>
            <b>Cross-Platform BIOS</b><br />
            e.ecl.management Running VMOS Mode ...<br />
            mounted system /dev/local1<br />
            mounted locals /dev/*<br />
            mounted cpu /bin/bios/boot<br />
            mounted memory /dev/mtp:device/memory<br />
            mounted index /dev/local1/os<br />
            booted M Edition 4<br />
            package entry (mos_desktop)<br />
            package entry (mos_processor)<br />
            package entry (mos_responsity)<br />
            error entry from (M Edition 4) to (e.ecl.VMOS) : Array [<br />
            e.ecl exiting from boot<br />
            <b>Good Bye!</b><br />
            e.ecl shutting down tasks<br />
            e.ecl clearing additional cache<br />
            ]<br />
            error entry (VMOS) : invalid to mount shdn() void<br />
            process enter from (VMOS) in (default) : close(task(*))<br />
            deny all from (M Edition 4)<br />
            error entry (VMOS) : invalid to shutting down device<br />
            tip enter from (VMOS) : press f2 to endtask and goto bios:safemode <br />
            command enter from (VMOS) to (cross.platforms.platform.bios) : <form action="bios.php">bios:<input style="border: none;background-color: black;color: white;" /></form>
            <script>
                document.body.addEventListener("keydown",function (e) {
                   if (e.keyCode === 113) {
                       window.location.assign('bios.php?command=home();safe()');
                   }
                });
            </script>
        </code>
    </body>
</html>