import React, {lazy} from 'react';
import {Route, Switch, useLocation} from 'react-router-dom';

import MainLayout from './../layout/MainLayout';


const Dashboard = lazy(() => import('../views/dashboard/Default'));
const Authentication = lazy(() => import('../views/setting/Authentication'));
const Profile = lazy(() => import('../views/setting/Profile'));
const Manage = lazy(() => import('../views/request/Manage'));

const MainRoutes = () => {
    const location = useLocation();
    return (
        <Route
            path={[
                '/dashboard',
                '/authentication',
                '/profile',
            ]}
        >
            <MainLayout showBreadcrumb={true}>
                <Switch location={location} key={location.pathname}>
                        <Route path="/dashboard" component={Dashboard} />
                        <Route path="/authentication" component={Authentication} />
                        <Route path="/profile" component={Profile} />
                        <Route path="/request" component={Manage} />
                </Switch>
            </MainLayout>
        </Route>
    );
};

export default MainRoutes;
