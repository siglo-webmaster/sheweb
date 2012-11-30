format 74

classcanvas 128044 class_ref 128812 // auxDespachosBodega
  class_drawing_mode default show_context_mode default show_stereotype_properties default
  xyz 137 345 2000
end
usecasecanvas 128172 usecase_ref 131116 // consultar cola de despacho e imprimir despacho y/o guia
  xyzwh 452 248 3005 64 32 label_xy 312 280
end
usecasecanvas 128300 usecase_ref 131244 // registrar cuando la entrega fue efectiva
  xyzwh 464 430 3005 64 32 label_xy 377 462
end
fragment 128556 "Despachos de mercancia"
  xyzwh 295 192 2000 394 317
end
line 128684 ----
  from ref 128044 z 3006 to ref 128172
line 128812 ----
  from ref 128044 z 3006 to ref 128300
end
