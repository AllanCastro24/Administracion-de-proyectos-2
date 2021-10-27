import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { DiccionarioComponent } from './diccionario/diccionario.component';
import { IdiomasComponent } from './idiomas/idiomas.component';
import { SesionComponent } from './sesion/sesion.component';
import { TraductorComponent } from './traductor/traductor.component';
const routes: Routes = [
  { path: 'idiomas', component:IdiomasComponent },
  { path: 'diccionario', component:DiccionarioComponent },
  { path: 'traductor', component:TraductorComponent },
  { path: 'sesion', component:SesionComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
