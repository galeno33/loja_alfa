import { Component, OnInit } from '@angular/core';
import { AlertController, NavController } from '@ionic/angular';

import { ProviderService } from '../provider/provider.service';
import { map } from 'rxjs/operators';
import { HttpClient } from '@angular/common/http';


@Component({
  selector: 'app-login',
  templateUrl: './login.page.html',
  styleUrls: ['./login.page.scss'],
})
export class LoginPage implements OnInit {

    Login: string;
    password: string;

  constructor(
              public alert: AlertController,
              public url: ProviderService,
              public http: HttpClient,
              public nav: NavController
  ) { }

  ngOnInit() {

  }

  async entrar(){

    if(this.Login == undefined || this.password == undefined){

        const alert = await this.alert.create({
          header: 'Atenção',
          message: 'Preencha todos os campos!!',
          buttons: ['OK']
        });
        await alert.present();

    }else{


      this.http.get(this.url.getUrl() + "login.php?Login=" + this.Login + "&password=" + this.password).pipe(map((res: any) => res))
      .subscribe(

        data => {

          if (data.msg.logado == 'sim'){
              this.nav.navigateBack('home');
          }else{

          }
        }
      );

    }
  }

}
