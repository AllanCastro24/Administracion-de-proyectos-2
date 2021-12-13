import { Component, OnInit } from '@angular/core';
import { Idiomas } from './idiomas';
import { ApiService } from './services/api-service';
 
@Component({
  selector: 'app-idiomas',
  templateUrl: './idiomas.component.html',
  styleUrls: ['./idiomas.component.scss']
})
export class IdiomasComponent implements OnInit {

  idiomas: Idiomas[] = []
  constructor(public apiService:ApiService) { }

  ngOnInit(): void {//Acá se manda llamar el getIdiomas para el listado de idiomas
    this.getIdiomas();
  }

  getIdiomas(): void{
    this.apiService.getIdiomas().subscribe(response => {
      const { idiomas } = response
      this.idiomas = idiomas;
    })
  }

  
}
