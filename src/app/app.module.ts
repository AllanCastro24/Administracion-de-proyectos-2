import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { IdiomasModule } from './idiomas/idiomas.module';
import { TraductorModule } from './traductor/traductor.module';
import { DiccionarioModule } from './diccionario/diccionario.module';
import { CoreModule } from './core/core.module';
import { SharedModule } from './shared/shared.module';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { DiccionarioComponent } from './diccionario/diccionario.component';
import { SesionModule } from './sesion/sesion.module';
import { CrearUserComponent } from './crear-user/crear-user.component';

@NgModule({
  declarations: [
    AppComponent,
    CrearUserComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    CoreModule,
    SharedModule,
    IdiomasModule,
    TraductorModule,
    DiccionarioModule,
    SesionModule,
    BrowserAnimationsModule,
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
