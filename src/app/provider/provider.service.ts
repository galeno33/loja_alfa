import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class ProviderService {

  url:string = "http://localhost/projetos/apploja/php/";

  constructor() { }

  getUrl(){
    return this.url;
  }
}
