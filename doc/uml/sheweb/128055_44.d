format 74

classcanvas 128055 class_ref 128055 // superUsuario
  class_drawing_mode default show_context_mode default show_stereotype_properties default
  xyz 61.3537 269.146 2000
end
usecasecanvas 128183 usecase_ref 128055 // administracion de usuarios
  xyzwh 301 37 3005 63 33 label_xy 246 68
end
usecasecanvas 128439 usecase_ref 128183 // administracion de grupos de usuarios
  xyzwh 479 61 3005 63 33 label_xy 398 93
end
usecasecanvas 128695 usecase_ref 128311 // administracion de modulos del sistema
  xyzwh 333 115 3005 63 33 label_xy 248 147
end
usecasecanvas 128951 usecase_ref 128439 // administracion de parametros de configuracion del sistema
  xyzwh 391 187 3005 63 33 label_xy 244 219
end
usecasecanvas 129207 usecase_ref 128567 // auditoria de inventarios
  xyzwh 313 297 3005 64 32 label_xy 274 329
end
usecasecanvas 129335 usecase_ref 128695 // auditoria de compras
  xyzwh 547 374 3005 64 32 label_xy 515 406
end
usecasecanvas 129463 usecase_ref 128823 // auditoria de comercial
  xyzwh 313 369 3005 64 32 label_xy 278 401
end
usecasecanvas 129591 usecase_ref 128951 // auditoria de cartera
  xyzwh 546 299 3005 64 32 label_xy 519 331
end
usecasecanvas 129719 usecase_ref 129079 // auditoria de procesos del sistema
  xyzwh 551 443 3005 64 32 label_xy 483 475
end
fragment 129975 "auditoria"
  xyzwh 233 279 2000 461 248
end
usecasecanvas 130103 usecase_ref 129207 // auditoria de contabilidad
  xyzwh 316 439 3005 64 32 label_xy 273 471
end
fragment 130359 "administracion de sistema"
  xyzwh 235 9 2000 415 256
end
classcanvas 132663 class_ref 128183 // auxiliarSistemas
  class_drawing_mode default show_context_mode default show_stereotype_properties default
  xyz 53 600 2000
end
fragment 132791 "reportes"
  xyzwh 237 554 2000 448 239
end
usecasecanvas 132919 usecase_ref 129335 // generacion de reportes
  xyzwh 402 567 3005 64 32 label_xy 364 599
end
usecasecanvas 133047 usecase_ref 129463 // administracion de reportes
  xyzwh 406 633 3005 64 32 label_xy 357 665
end
line 133175 ----
  from ref 132663 z 3006 to ref 132919
line 133303 ----
  from ref 132663 z 3006 to ref 133047
relationcanvas 133431 relation_ref 128055 // <generalisation>
  from ref 128055 z 2001 to ref 132663
  no_role_a no_role_b
  no_multiplicity_a no_multiplicity_b
end
line 133559 ----
  from ref 128055 z 3006 to ref 129463
line 133687 ----
  from ref 128055 z 3006 to ref 130103
line 133815 ----
  from ref 128055 z 3006 to ref 129207
line 133943 ----
  from ref 128055 z 3006 to ref 129591
line 134071 ----
  from ref 128055 z 3006 to ref 129335
line 134199 ----
  from ref 128055 z 3006 to ref 129719
line 134327 ----
  from ref 128055 z 3006 to ref 128951
line 134455 ----
  from ref 128055 z 3006 to ref 128695
line 134583 ----
  from ref 128055 z 3006 to ref 128439
line 134711 ----
  from ref 128055 z 3006 to ref 128183
end
