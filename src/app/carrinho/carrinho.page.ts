import { Component, OnInit } from '@angular/core';
import { NavController } from '@ionic/angular';
import { ProviderService } from '../provider/provider.service';



@Component({
  selector: 'app-carrinho',
  templateUrl: './carrinho.page.html',
  styleUrls: ['./carrinho.page.scss'],
})
export class CarrinhoPage implements OnInit {

  produtos:any;

  constructor(
            public nav: NavController,
            public Urlserve: ProviderService

  ) { }

  ngOnInit() {
  }
back(){
  //this.nav.navigateBack('/home');
}

}
