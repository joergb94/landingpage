<header id="header" class="content-site">
        
            <template v-if="menu==0">
                    <main-page-component ></main-page-component>
            </template>
            <template v-if="menu==1">
                     <about-us-component></about-us-component>
            </template>
            <template v-if="menu==2">
                     <service-component></service-component>
            </template>
            <template v-if="menu==3">
                     <career-component></career-component>
            </template>
            <template v-if="menu==4">
                  <testimonies-component></testimonies-component>
            </template>
            <template v-if="menu==5">
                 
            </template>
         <!-- end of container -->
    </header> <!-- end of header -->