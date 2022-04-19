import VueRouter from "vue-router";
import DescriptionModule from "./documentations/DescriptionModule";
import API from "./documentations/API";
import ComposantFrontal from "./documentations/ComposantFrontal";
import CasUtilisation from "./documentations/CasUtilisation";
import ServiceBackend from "./documentations/ServiceBackend";

const routes = [

    {
        path:"/",
        component: [
            DescriptionModule,
            API,
            CasUtilisation,
            ComposantFrontal,
            ServiceBackend
        ],
        name:"documentation.show",
    },
];

const router = new VueRouter({
    mode:"history",
    routes,
});

export default router;
