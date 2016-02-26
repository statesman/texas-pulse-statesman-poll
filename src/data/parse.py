import csv
import json


def pollCruncher(csv_in, delim, json_out):
    with open(csv_in, "rb") as infile:
        reader = csv.reader(infile, delimiter=delim)
        reader.next()
        master_dict = {}
        for row in reader:
            q_id = row[0]
            question = row[1]
            answer = row[2]
            all_lv = row[3]
            sex_m = row[4]
            sex_w = row[5]
            age_18_39 = row[6]
            age_40_64 = row[7]
            age_o65 = row[8]
            race_w = row[9]
            race_b = row[10]
            race_h = row[11]
            race_o = row[12]
            party_d = row[13]
            party_o = row[14]
            ideology_c = row[15]
            ideology_m = row[16]
            ideology_l = row[17]
            ideology_ns = row[18]
            edu_ahs = row[19]
            edu_ghs = row[20]
            edu_ac = row[21]
            edu_gc = row[22]
            edu_gs = row[23]
            edu_ns = row[24]
            married_y = row[25]
            married_n = row[26]
            children_y = row[27]
            children_n = row[28]
            income_u30 = row[29]
            income_30_50 = row[30]
            income_50_100 = row[31]
            income_100_200 = row[32]
            income_o200 = row[33]
            income_ns = row[34]
            primary_econ = row[35]
            primary_wash = row[36]
            primary_social = row[37]
            primary_border = row[38]
            primary_intl = row[39]
            primary_gen = row[40]
            primary_other = row[41]
            primary_ns = row[42]
            voted_y = row[43]
            voted_n = row[44]
            notes = row[45]

            # does the key exist in master dict? if not, add it
            if q_id not in master_dict:
                master_dict[q_id] = {}

            # does the list of answers exist? if not, add it
            if 'responses' not in master_dict[q_id]:
                master_dict[q_id]['responses'] = []

            # add the shiz
            master_dict[q_id]['question'] = question

            a = {}
            a['text'] = answer
            a['all_lv'] = float(all_lv)
            a['sex_m'] = float(sex_m)
            a['sex_w'] = float(sex_w)
            a['age_18_39'] = float(age_18_39)
            a['age_40_64'] = float(age_40_64)
            a['age_o65'] = float(age_o65)
            a['race_w'] = float(race_w)
            a['race_b'] = float(race_b)
            a['race_h'] = float(race_h)
            a['race_o'] = float(race_o)
            a['party_d'] = float(party_d)
            a['party_o'] = float(party_o)
            a['ideology_c'] = float(ideology_c)
            a['ideology_m'] = float(ideology_m)
            a['ideology_l'] = float(ideology_l)
            a['ideology_ns'] = float(ideology_ns)
            a['edu_ahs'] = float(edu_ahs)
            a['edu_ghs'] = float(edu_ghs)
            a['edu_ac'] = float(edu_ac)
            a['edu_gc'] = float(edu_gc)
            a['edu_gs'] = float(edu_gs)
            a['edu_ns'] = float(edu_ns)
            a['married_y'] = float(married_y)
            a['married_n'] = float(married_n)
            a['children_y'] = float(children_y)
            a['children_n'] = float(children_n)
            a['income_u30'] = float(income_u30)
            a['income_30_50'] = float(income_30_50)
            a['income_50_100'] = float(income_50_100)
            a['income_100_200'] = float(income_100_200)
            a['income_o200'] = float(income_o200)
            a['income_ns'] = float(income_ns)
            a['voted_y'] = float(voted_y)
            a['voted_n'] = float(voted_n)
            if primary_econ and primary_econ != "" and primary_econ != "~":
                a['primary_econ'] = float(primary_econ)
            if primary_wash and primary_wash != "" and primary_wash != "~":
                a['primary_wash'] = float(primary_wash)
            if primary_social and primary_social != "" and primary_social != "~":
                a['primary_social'] = float(primary_social)
            if primary_border and primary_border != "" and primary_border != "~":
                a['primary_border'] = float(primary_border)
            if primary_intl and primary_intl != "" and primary_intl != "~":
                a['primary_intl'] = float(primary_intl)
            if primary_gen and primary_gen != "" and primary_gen != "~":
                a['primary_gen'] = float(primary_gen)
            if primary_other and primary_other != "" and primary_other != "~":
                a['primary_other'] = float(primary_other)
            if primary_ns and primary_ns != "" and primary_ns != "~":
                a['primary_ns'] = float(primary_ns)
            if notes and notes != "" and notes != "~":
                a['notes'] = notes
            master_dict[q_id]['responses'].append(a)

        with open(json_out, "wb") as jsout:
            jsout.write(json.dumps(master_dict))


pollCruncher(
    "dem-data.csv",
    "\t",
    "dem-data.json"
    )
