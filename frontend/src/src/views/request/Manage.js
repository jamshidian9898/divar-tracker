import React from 'react';
import { Grid } from '@material-ui/core';

import { gridSpacing } from '../../store/constant';
import RequestTable from '../dashboard/RequestTable';

import TotalIncomePatternCard from '../../ui-component/cards/TotalIncomePatternCard';
import TotalIncomeCard from '../../ui-component/cards/TotalIncomeCard';
import PopularCard from '../../ui-component/cards/PopularCard';

const Manage = () => {
    return (
        <Grid container spacing={gridSpacing}>
            <Grid item xs={12}>
                <Grid container spacing={gridSpacing}>
                    <Grid item xs={12} sm={12} md={8}>
                            <Grid container spacing={gridSpacing}>
                                <Grid item sm={6} xs={12} md={6} lg={6}>
                                    <TotalIncomePatternCard />
                                </Grid>
                                <Grid item sm={6} xs={12} md={6} lg={6}>
                                    <TotalIncomeCard />
                                </Grid>
                                <Grid item sm={6} xs={12} md={6} lg={12}>
                                    <RequestTable />
                                </Grid>
                        </Grid>
                    </Grid>
                    <Grid item xs={12} sm={12} md={4}>
                        <PopularCard />
                    </Grid>
                </Grid>
            </Grid>
        </Grid>
    );
};

export default Manage;
