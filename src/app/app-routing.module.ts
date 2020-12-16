import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { AppComponent } from './app.component';
import { AboutComponent } from './components/about/about.component';
import { ContactComponent } from './components/contact/contact.component';
import { HomeComponent } from './components/home/home.component';
import { PortfolioComponent } from './components/portfolio/portfolio.component';
import { ServicesComponent } from './components/services/services.component';
import { ZohoComponent } from './components/zoho/zoho.component';

const routes: Routes = [
  {
    path:"", component:HomeComponent
  },
  {
    path:"home", component:HomeComponent
  },
  {
    path:"about", component:AboutComponent
  },
  {
    path:"partners", component:PortfolioComponent
  },
  {
    path:"services", component:ServicesComponent
  },
  {
    path:"services/zoho_services", component:ZohoComponent
  },
  {
    path:"contact", component:ContactComponent
  },

];

@NgModule({
  imports: [RouterModule.forRoot(routes,{ useHash: true })],
  exports: [RouterModule]
})
export class AppRoutingModule { }
