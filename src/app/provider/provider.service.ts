import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class ProviderService {

  // tslint:disable-next-line:max-line-length
  url:string = "http://devinp.com.br/php/"; // substitui a URL do servidor local pela url do servidor online == http://devinp-com.umbler.net/php/
  // url:string = "http://localhost/projetos/apploja02/php/";

  constructor() { }

  getUrl(){
    return this.url;
  }
}
