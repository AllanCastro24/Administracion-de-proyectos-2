import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { DiccionarioComponent } from './diccionario/diccionario.component';
import { IdiomasComponent } from './idiomas/idiomas.component';
import { SesionComponent } from './sesion/sesion.component';
import { TraductorComponent } from './traductor/traductor.component';
import { CrearUserComponent } from './crear-user/crear-user.component';
const routes: Routes = [
  { path: 'idiomas', component:IdiomasComponent },
  { path: 'diccionario', component:DiccionarioComponent },
  { path: 'traductor', component:TraductorComponent },
  { path: 'sesion', component:SesionComponent},
  { path: 'crear-user',component:CrearUserComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
