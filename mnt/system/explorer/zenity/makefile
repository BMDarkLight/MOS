make.info:json_decode(string []) : {
'MODE':'RELEASE',
'DEBUG':'FALSE',
'WITH_ELANG':'TRUE'
}

make.info:elang('com',string []) : {
$e['info']('json');
}

prepare zenity-demo

make.command:run : {
zenity-demo-gzip 'zenity.ins' ~[string [mount]]
run ~[string [mount]]/zenity.php -export(zenity-file)
import zenity-file
prepare zenity-file
zenity-file install
zenity-file check -f
prepare zenity
prepare zenity-*
clear zenity-file zenity-demo zenity-installer
}

make.command:after : {
put zenity
clear *
}

make.command:[make.info]{'DEBUG'} : {
debug zenity
}

make.registery.add:putppa : {zenity}
make.registery.get : {zenity}
make.zenity -collect -main
if (zenity.status != true) {make.position.reload}