<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Kendaraan;

/**
 * KendaraanSearch represents the model behind the search form of `app\models\Kendaraan`.
 */
class KendaraanSearch extends Kendaraan
{
    public $unit_pemegang;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'jenis_id', 'merk_id', 'unit_id', 'created_by', 'updated_by','status'], 'integer'],
            [['tipe','unit_pemegang', 'tahun_perolehan', 'tgl_pembuatan', 'bpkb', 'file_bpkb', 'no_stnk', 'file_stnk', 'nomor_mesin', 'nomor_rangka', 'no_plat_hitam', 'no_plat_merah', 'created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Kendaraan::find();
        $query->orderBy(['id'=>SORT_DESC]);
        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
          
          
            'merk_id' => $this->merk_id,
            'status'=> $this->status,
            'unit_id' => $this->unit_id,
        
        ]);

        $query->andFilterWhere(['like', 'tipe', $this->tipe])
            ->andFilterWhere(['like', 'tahun_perolehan', $this->tahun_perolehan])
            ->andFilterWhere(['like', 'nomor_mesin', $this->nomor_mesin])
            ->andFilterWhere(['like', 'nomor_rangka', $this->nomor_rangka])
            ->andFilterWhere(['like', 'no_plat_hitam', $this->no_plat_hitam])
            ->andFilterWhere(['like', 'no_plat_merah', $this->no_plat_merah]);

        return $dataProvider;
    }

    public function searchItem($params)
    {
        $query = Kendaraan::find();
        $query->orderBy(['id'=>SORT_DESC]);
       $query->where(['kendaraan.status'=>'1']);
      
        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination'=>[
                'pageSize'=>5
            ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'jenis_id' => $this->jenis_id,
            'merk_id' => $this->merk_id,
            'tgl_pembuatan' => $this->tgl_pembuatan,
            'kendaraan.unit_id' => $this->unit_id,
            
          
        ]);
        
      
      

        $query->andFilterWhere(['like', 'tipe', $this->tipe])
            ->andFilterWhere(['like', 'tahun_perolehan', $this->tahun_perolehan])
           
            ->andFilterWhere(['like', 'bpkb', $this->bpkb])
            ->andFilterWhere(['like', 'file_bpkb', $this->file_bpkb])
            ->andFilterWhere(['like', 'no_stnk', $this->no_stnk])
            ->andFilterWhere(['like', 'file_stnk', $this->file_stnk])
            ->andFilterWhere(['like', 'nomor_mesin', $this->nomor_mesin])
            ->andFilterWhere(['like', 'nomor_rangka', $this->nomor_rangka])
            ->andFilterWhere(['like', 'no_plat_hitam', $this->no_plat_hitam])
            ->andFilterWhere(['like', 'no_plat_merah', $this->no_plat_merah]);

        return $dataProvider;
    }
    
    public function searchItem2($params)
    {
        $query = Kendaraan::find();
        $query->orderBy(['id'=>SORT_DESC]);
        $query->where(['kendaraan.status'=>'1']);
        $query->joinWith(['dipinjam']);
      
        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination'=>[
                'pageSize'=>5
            ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'jenis_id' => $this->jenis_id,
            'merk_id' => $this->merk_id,
            'tgl_pembuatan' => $this->tgl_pembuatan,
            'kendaraan.unit_id' => $this->unit_id,
            
          
        ]);
        
        
            
              $query->andFilterWhere([
                'peminjam.unit_id' => $this->unit_pemegang,
                ]);
             
              
        
            
      

        $query->andFilterWhere(['like', 'tipe', $this->tipe])
            ->andFilterWhere(['like', 'tahun_perolehan', $this->tahun_perolehan])
           
            ->andFilterWhere(['like', 'bpkb', $this->bpkb])
            ->andFilterWhere(['like', 'file_bpkb', $this->file_bpkb])
            ->andFilterWhere(['like', 'no_stnk', $this->no_stnk])
            ->andFilterWhere(['like', 'file_stnk', $this->file_stnk])
            ->andFilterWhere(['like', 'nomor_mesin', $this->nomor_mesin])
            ->andFilterWhere(['like', 'nomor_rangka', $this->nomor_rangka])
            ->andFilterWhere(['like', 'no_plat_hitam', $this->no_plat_hitam])
            ->andFilterWhere(['like', 'no_plat_merah', $this->no_plat_merah]);

        return $dataProvider;
    }
}
