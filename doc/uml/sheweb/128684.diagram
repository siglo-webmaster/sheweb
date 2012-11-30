format 74

classcanvas 128044 class_ref 128684 // auxEmpaqueBodega
  class_drawing_mode default show_context_mode default show_stereotype_properties default
  xyz 136 271 2000
end
usecasecanvas 128172 usecase_ref 130476 // recibir listado de libros a empacar
  xyzwh 361 154 3005 64 32 label_xy 291 186
end
usecasecanvas 128300 usecase_ref 130604 // registrar anomalias o danos en libros
  xyzwh 480 211 3005 64 32 label_xy 402 243
end
usecasecanvas 128684 usecase_ref 130732 // registrar salida de libros de la etapa de alistamiento
  xyzwh 412 402 3005 64 32 label_xy 289 434
end
fragment 128940 "alistamiento de rutas"
  xyzwh 278 125 2000 406 338
end
usecasecanvas 129068 usecase_ref 130860 // notificar al coordinador de inventario
  xyzwh 383 308 3005 64 32 label_xy 304 340
end
usecasecanvas 129196 usecase_ref 130988 // notificar al acomodador o al separador 
  xyzwh 531 351 3011 64 32 label_xy 446 383
end
line 128428 ----
  from ref 128044 z 3006 to ref 128172
line 128556 ----
  from ref 128044 z 3006 to ref 128300
line 128812 ----
  from ref 128684 z 3006 to ref 128044
line 129708 --->
  from ref 128300 z 3006 to ref 129068
line 129836 ---> decenter_begin 531
  from ref 128300 z 3012 to ref 129196
end
