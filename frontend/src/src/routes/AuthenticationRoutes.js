import React, {lazy} from 'react';
import {Route, Switch, useLocation} from 'react-router-dom';
import MinimalLayout from '../layout/MinimalLayout';

const AuthLogin = lazy(() => import('../views/authentication/Login'));
const AuthRegister = lazy(() => import('../views/authentication/Register'));


const AuthenticationRoutes = () => {
    const location = useLocation();

    return (
        <Route
            path={[
                '/login',
                '/register'
            ]}
        >
            <MinimalLayout>
                <Switch location={location} key={location.pathname}>

                    <Route path="/login" component={AuthLogin} />
                    <Route path="/register" component={AuthRegister} />

                </Switch>
            </MinimalLayout>
        </Route>
    );
};

export default AuthenticationRoutes;
